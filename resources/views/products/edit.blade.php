@extends('layouts.master')
    @section('content')
        <div class="page-content">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">

                        <div class="x_content">
                            {!! Form::model($product, ['route'=>['products.update', $product->id], 'method'=>'patch','class'=>'form-horizontal form-label-left']) !!}
                                @include('partials._product_form')
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection