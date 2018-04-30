@extends('layouts.app')
@section('title', 'Afiliados')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-9">
        {{ Breadcrumbs::render('create_retirement_fund', $affiliate) }}
    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">    
    <div class="row">
        <div class="col-md-12">
            {{--  <affiliate-police :affiliate="{{ $affiliate }}" inline-template>
    @include('affiliates.simple_info', ['affiliate'=>$affiliate])
            </affiliate-police>  --}}
            <hr>
            <ret-fun-create-info></ret-fun-create-info>
        </div>
        <div class="col-md-12">
            <div class="ibox-content">
                @if ($errors->any())                
                    {{ implode('', $errors->all('<div>-:message</div><br>')) }}
<!--                    <flash message="werwer"></flash>-->
                @endif
                {!! Form::open(['url' => 'ret_fun', 'method' => 'POST', 'id'=>'ret-fun-form']) !!}
                <input type="hidden" name="affiliate_id" value="{{$affiliate->id}}">
                <ret-fun-form inline-template>
                    {{-- <form-wizard
                        color="#1AB394"
                        title=""
                        subtitle=""
                        back-button-text="Volver"
                        next-button-text="Siguiente"
                        finish-button-text="Finalizar"
                        error-color="#ED5565"
                        @on-complete="onFinish"
                        @on-loading="setLoading"
                        >
                        <div class="panel" :class="loadingWizard ? 'sk-loading' : ''">
                            <div class="panel-body">
                                <div class="sk-folding-cube" v-show="loadingWizard">
                                    <div class="sk-cube1 sk-cube"></div>
                                    <div class="sk-cube2 sk-cube"></div>
                                    <div class="sk-cube4 sk-cube"></div>
                                    <div class="sk-cube3 sk-cube"></div>
                                </div>
                                <tab-content title="Modalidad y Requisitos" ref="uno" icon="mdi mdi-format-list-checks" :before-change="validateFirstStep">
                                    <ret-fun-step1-requirements :modalities="{{ $modalities }}" :requirements="{{ $requirements }}" :user="{{ $user }}" :cities="{{ $cities }}"
                                            inline-template>
                                        @include('ret_fun.step1_requirements')
                                    </ret-fun-step1-requirements>
                                </tab-content>
                            </div>
                        </div>
                    <tab-content title="Datos del Solicitante" ref="dos" icon="mdi mdi-account-edit" :before-change="validateSecondStep">
                    <div class="panel" :class="loadingWizard ? 'sk-loading' : ''">
                        <div class="panel-body">
                            <div class="sk-folding-cube" v-show="loadingWizard">
                                <div class="sk-cube1 sk-cube"></div>
                                <div class="sk-cube2 sk-cube"></div>
                                <div class="sk-cube4 sk-cube"></div>
                                <div class="sk-cube3 sk-cube"></div>
                            </div>
                                <ret-fun-step2-applicant :cities="{{ $cities }}" :kinships="{{ $kinships }}" :affiliate="{{ $affiliate }}" :spouse="{{ $spouse }}" inline-template>
                                    @include('ret_fun.step2_applicant')
                                </ret-fun-step2-applicant>
                            </div>
                        </div>
                    </tab-content>
                    <tab-content title="Datos de los Derechohabientes" icon="mdi mdi-account-multiple-plus">
                        <div class="panel" :class="loadingWizard ? 'sk-loading' : ''">
                        <div class="panel-body">
                            <div class="sk-folding-cube" v-show="loadingWizard">
                                <div class="sk-cube1 sk-cube"></div>
                                <div class="sk-cube2 sk-cube"></div>
                                <div class="sk-cube4 sk-cube"></div>
                                <div class="sk-cube3 sk-cube"></div>
                            </div>
                                <ret-fun-step3-beneficiaries :items="{{ $ret }}" :kinhsips="{{ $kinships }}" inline-template>
                                    @include('ret_fun.step3_beneficiaries')
                                </ret-fun-step3-beneficiaries>
                            </div>
                        </div>
                    </tab-content>
                    </form-wizard> --}}
                    <form-wizard  shape="circle" color="#20a0ff" error-color="#ff4949">
                        
                        <tab-content title="Modalidad y Requisitos" ref="uno" icon="mdi mdi-format-list-checks" :before-change="validateFirstStep">
                            <ret-fun-step1-requirements :modalities="{{ $modalities }}" :requirements="{{ $requirements }}" :user="{{ $user }}" :cities="{{ $cities }}"
                                inline-template>
                                @include('ret_fun.step1_requirements')
                            </ret-fun-step1-requirements>
                        </tab-content>
                        <tab-content title="Additional Info" icon="ti-settings">
                            Second tab
                        </tab-content>
                        <tab-content title="Last step" icon="ti-check">
                            Yuhuuu! This seems pretty damn simple
                        </tab-content>
                    
                        <el-button type="primary" slot="prev">Back</el-button>
                        <el-button type="primary" slot="next">Next</el-button>
                        <el-button type="primary" slot="finish">Finish</el-button>
                    </form-wizard>
                </ret-fun-form>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection
