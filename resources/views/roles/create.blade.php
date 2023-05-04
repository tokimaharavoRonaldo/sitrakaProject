@extends('layouts.app')

@section('container')
<div class="containt">
<div class="titre">
<h3>Ajouter Role</h3>
</div>
<br>
<section class="content">
{!! Form::open(['url'=> action('App\Http\Controllers\RoleController@store'),'method'=>'post','id'=>'ajouter_role_form','class'=>'produit_form','files' => true,'enctype' =>'multipart/form-data' ]) !!}
<div class="row justify-content-center">
            <div class="col-sm-3">
        <div class="form-group">
            {!! Form::label('role', 'Role:*') !!}
            {!! Form::text('role', null, ['class' => 'form-control', 'required',
              ]); !!}
        </div>
    </div>
   
            </div>
            <br>
            <br>
      <div class="row">
      <div class="col-sm-12 ">
      <button type="submit" class="btn btn-primary submit_product_form float-end" >Ajouter</button>
      </div>
      </div>
      

{!! Form::close() !!}

</section>
</div>
@endsection
