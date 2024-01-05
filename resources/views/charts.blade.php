@extends('layouts.main')

@section('body')

<div class="container-fluid">
    <div class="d-xm-flex align-items-center mb-4 px-3">
        <h1 class="mb-0 text-body-secondary fs-2 border-bottom pb-2">Charts</h1>
    </div>
</div>
<div class="row me-1 ms-1 px-2 mt-3 mb-4 pt-3 d-flex justify-content-center">
    <div class="col-sm-8 mb-1">
        <div class="card">
            <h5 class="card-header d-flex px-0 bg-transparent">
                <svg class="product-analysis ms-3 me-2" xmlns="http://www.w3.org/2000/svg"
                    class="icon icon-tabler icon-tabler-chart-area-line-filled" width="24"
                    height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                    fill="none" stroke-linecap="round" stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path
                        d="M15.22 9.375a1 1 0 0 1 1.393 -.165l.094 .083l4 4a1 1 0 0 1 .284 .576l.009 .131v5a1 1 0 0 1 -.883 .993l-.117 .007h-16.022l-.11 -.009l-.11 -.02l-.107 -.034l-.105 -.046l-.1 -.059l-.094 -.07l-.06 -.055l-.072 -.082l-.064 -.089l-.054 -.096l-.016 -.035l-.04 -.103l-.027 -.106l-.015 -.108l-.004 -.11l.009 -.11l.019 -.105c.01 -.04 .022 -.077 .035 -.112l.046 -.105l.059 -.1l4 -6a1 1 0 0 1 1.165 -.39l.114 .05l3.277 1.638l3.495 -4.369z"
                        stroke-width="0" fill="currentColor"></path>
                    <path
                        d="M15.232 3.36a1 1 0 0 1 1.382 -.15l.093 .083l4 4a1 1 0 0 1 -1.32 1.497l-.094 -.083l-3.226 -3.225l-4.299 5.158a1 1 0 0 1 -1.1 .303l-.115 -.049l-3.254 -1.626l-2.499 3.332a1 1 0 0 1 -1.295 .269l-.105 -.069a1 1 0 0 1 -.269 -1.295l.069 -.105l3 -4a1 1 0 0 1 1.137 -.341l.11 .047l3.291 1.645l4.494 -5.391z"
                        stroke-width="0" fill="currentColor"></path>
                </svg>
                Product Analysis
            </h5>
            <div class="card-body mb-2">
                <canvas class="my-4 w-100" id="myChart" width="720" height="267"></canvas>
            </div>
        </div>
    </div>

@endsection