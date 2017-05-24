@extends('layouts.app')

@section('content')
    <section class="panel panel-warning">
        <header class="panel-heading">
            <h2 class="panel-title">{{isset($title)?$title:''}}</h2>
        </header>
        <div class="panel-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                    <strong>Data Belum Lengkap Atau Sesuai. </strong> Lengkapi data yang diminta
                </div>
            @endif

                        {!! Form::model($hasil_evaluasi_dosen, [
                            'method' => 'PATCH',
                            'url' => ['/admin/hasil_evaluasi_dosen', $hasil_evaluasi_dosen->id],
                            'class' => 'form-horizontal',
                            'files' => true
                        ]) !!}

                        @include ('admin.hasil_evaluasi_dosen.form', ['submitButtonText' => 'Update'])

                        {!! Form::close() !!}
        </div>
    </section>
@endsection