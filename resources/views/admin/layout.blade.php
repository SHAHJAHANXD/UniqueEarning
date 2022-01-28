
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    @include('admin.layout.heads')

</head>
<style>
  @media screen and (min-width: 1201px) and (max-width: 2560px) {
  .okay
  {
    margin-left: 320px !important;
    width: 70% !important;
  }
}
</style>
<body>
    @include('admin.layout.sidebar')
    <section class="main_content dashboard_part okay">
    @include('admin.layout.header')

    @yield('content')

    @include('admin.layout.footer')
    </section>
    @include('admin.layout.scripts')
</body>
</html>
