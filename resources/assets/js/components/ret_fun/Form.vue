<script>
export default {
  data() {
    return {
      pass: false,
      loadingWizard: false,
      formInline: {
        user: "",
        region: ""
      },
      rules: {
        user: [
          {
            required: true,
            message: "Please input Activity name",
            trigger: "blur"
          },
          {
            min: 3,
            max: 5,
            message: "Length should be 3 to 5",
            trigger: "blur"
          }
        ],
        region: [
          {
            required: true,
            message: "Please select Activity zone",
            trigger: "change"
          }
        ]
      }
    };
  },
  methods: {
    onFinish() {
      document.getElementById("ret-fun-form").submit();
    },
    setLoading: function(value) {
      this.loadingWizard = value;
    },
    validateFirstStep() {
      return new Promise((resolve, reject) => {
        this.$refs.ruleForm2.validate(valid => {
          resolve(valid);
        });
      });
      if (!this.$refs.uno.$children[0].city_end_id) {
        return false;
      }
      if (!this.$refs.uno.$children[0].modality) {
        return false;
      }
      var someRequirement = this.$refs.uno.$children[0].requirementList.some(
        val => {
          return val.status;
        }
      );
      if (!someRequirement) {
        return false;
      }
      return true;
    },
    validateSecondStep() {
      if (!this.$refs.dos.$children[0].applicant_type) {
        console.log("aqui");

        return false;
      }
      if (!this.$refs.dos.$children[0].applicant_identity_card) {
        console.log("aqui 1");
        return false;
      }
      if (!this.$refs.dos.$children[0].applicant_first_name) {
        console.log("aqui 2");
        return false;
      }
      if (!this.$refs.dos.$children[0].applicant_kinship_id) {
        console.log("aqui 3");
        return false;
      }

      this.sendApplicant();
      return true;
    },
    sendApplicant() {
      let applicant = {
        type: this.$refs.dos.$children[0].applicant_type,
        first_name: this.$refs.dos.$children[0].applicant_first_name,
        second_name: this.$refs.dos.$children[0].applicant_second_name,
        last_name: this.$refs.dos.$children[0].applicant_last_name,
        mothers_last_name: this.$refs.dos.$children[0].applicant_mothers_last_name,
        surname_husband: this.$refs.dos.$children[0].applicant_surname_husband,
        identity_card: this.$refs.dos.$children[0].applicant_identity_card,
        city_identity_card_id: this.$refs.dos.$children[0].applicant_city_identity_card_id,
        kinship_id: this.$refs.dos.$children[0].applicant_kinship_id,
        birth_date: this.$refs.dos.$children[0].applicant_birth_date,
        phone_number: this.$refs.dos.$children[0].applicant_phone_number,
        cell_phone_number: this.$refs.dos.$children[0].applicant_cell_phone_number
      };
      this.$store.commit("setApplicant", applicant);
      return true;
    }
  }
};
</script>
