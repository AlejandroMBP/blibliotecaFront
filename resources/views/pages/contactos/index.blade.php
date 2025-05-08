@extends('app')
@section('content')
    <!-- Breadcumb Section Start -->
    @include('pages.contactos.portada')

    <!-- Contact Section Start -->
    @include('pages.contactos.formulario')

    <!--<< Map Section Start >>-->
    @include('pages.contactos.maps')
@endsection

@push('scripts')
    <script src="assets/js/ajax-mail.js"></script>
@endpush
