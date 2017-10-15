@extends('admin.layouts.master')

@section('title-tag', 'Category List')

@section('page-title', 'Category List')

@section('panel-header', 'Category List')

@section('content')
    <div class="panel-body">
        <div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">

            <div class="row">
                <div class="col-sm-12">
                    <table width="100%" class="table table-striped table-bordered table-hover dataTable no-footer dtr-inline" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info" style="width: 100%;">
                        <thead>
                            <tr role="row">
                                <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 161px;">
                                    Rendering
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 156px;">
                                    Browser
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 151px;">
                                    Platform
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending" style="width: 139px;">
                                    Engine version
                                </th>
                                <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 106px;">
                                    CSS grade
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="gradeA odd" role="row">
                                <td class="sorting_1">Gecko</td>
                                <td>Firefox 1.0</td>
                                <td>Win 98+ / OSX.2+</td>
                                <td class="center">1.7</td>
                                <td class="center">A</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
        <!-- /.table-responsive -->
        <div class="well">
            <h4>DataTables Usage Information</h4>

            <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
            <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
        </div>
    </div>
@endsection


@push('scripts')
    <script>
        $(document).ready(function() {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
    <!-- DataTables JavaScript -->
    <script src="{{ asset('back-end/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('back-end/vendor/datatables-plugins/dataTables.bootstrap.min.js') }}"></script>
    <script src="{{ asset('back-end/vendor/datatables-responsive/dataTables.responsive.js') }}"></script>
@endpush



