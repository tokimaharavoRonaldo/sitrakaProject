@extends('layouts.app')

@section('container')
<div class="containt">
<div class="titre">
<h3>Ajouter client</h3>
</div>
<section class="content">
{!! Form::open(['url'=> action('App\Http\Controllers\ClientController@store'),'method'=>'post','id'=>'ajouter_produit_form','class'=>'produit_form','files' => true,'enctype' =>'multipart/form-data' ]) !!}
<div class="row">
            <div class="col-sm-2">
        <div class="form-group">
            {!! Form::label('surnom', 'surnom:*') !!}
            {!! Form::text('surnom', null, ['class' => 'form-control', 'required',
              'placeholder' => 'Mr/Mlle/Mme']); !!}
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            {!! Form::label('nom', 'nom:*') !!}
            
            {!! Form::text('nom', null, ['class' => 'form-control', 'required',
              'placeholder' => 'nom']); !!}
        </div>
    </div>
    <div class="col-sm-5">
        <div class="form-group">
            {!! Form::label('telephone', 'telephone:*') !!}
            
            {!! Form::text('telephone', null, ['class' => 'form-control', 'required',
              'placeholder' => 'telephone']); !!}
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            {!! Form::label('addresse', 'addresse:*') !!}
            
            {!! Form::textarea('addresse', null, ['class' => 'form-control', 'required',
              'placeholder' => 'addresse','style' => 'height:100px;']); !!}
        </div>
    </div>
            </div>
   
      <div class="row">
      <div class="col-sm-12 ">
      <button type="submit" class="btn btn-primary submit_product_form float-end" >Ajouter</button>
      </div>
      </div>
      

{!! Form::close() !!}

</section>
</div>
@endsection
