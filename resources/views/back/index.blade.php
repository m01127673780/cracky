@include('back.layout.header')
@include('back.layout.navbar')
@include('back.layout.sidbar')
<!-- @include('back.message')
 -->@include('back.modal')
{{------------------------------------}}
@include('back.layout.content_wrapper')
@include('back.layout.test')
@yield('content')
{{------------------------------------}}
@include('back.layout.footer')