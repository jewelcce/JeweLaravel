@extends('admin.layouts.master')

@section('title-tag', 'Dashboard')

@section('page-title', 'This is Title')

@section('panel-header', 'This is Panel Header')

@section('content')
    <div class="panel-body">
        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

            <div class="row">
                <div class="col-sm-12">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores cupiditate debitis
                        doloribus ea eligendi excepturi impedit in laboriosam necessitatibus numquam officia,
                        perspiciatis porro quaerat quas quasi quia sequi vitae voluptas?
                    </p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae deleniti fugiat ipsum
                        labore, laboriosam nihil nisi quam veniam vero voluptates.</p>
                </div>
            </div>
        </div>
    </div>
    @endsection

