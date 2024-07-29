@extends ('admin.layouts.master')
@section('content')
<section class="section">
          <div class="section-header">
            <h1>Dashboard</h1>
          </div>
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                  <i class="fas fa-columns"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Tổng số danh mục sản phẩm</h4>
                  </div>
                  <div class="card-body">
                    {{$totalCategories}}
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
              <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                  <i class="fas fa-box"></i>
                </div>
                <div class="card-wrap">
                  <div class="card-header">
                    <h4>Tổng số sản phẩm</h4>
                  </div>
                  <div class="card-body">
                  {{$totalProducts}}
                  </div>
                </div>
              </div>
            </div>             
          </div>
        </section>
@endsection