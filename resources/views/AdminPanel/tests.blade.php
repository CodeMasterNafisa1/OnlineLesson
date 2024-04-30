<!--

=========================================================
* Fanlar Tailwind - v1.0.1
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-tailwind
* Copyright 2022 Creative Tim (https://www.creative-tim.com)

* Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <title>{{$topic->name}}</title>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Main Styling -->
    <link href="../assets/css/argon-dashboard-tailwind.css?v=1.0.1" rel="stylesheet" />
    <script src="../sweetalert.js"></script>
</head>

<body class="m-0 font-sans text-base antialiased font-normal dark:bg-slate-900 leading-default bg-gray-50 text-slate-500">
<div class="absolute w-full bg-blue-500 dark:hidden min-h-75"></div>

<aside class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl dark:shadow-none dark:bg-slate-850 xl:ml-6 max-w-64 ease-nav-brand z-990 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
    <div class="h-19">
        <i class="absolute top-0 right-0 p-4 opacity-50 cursor-pointer fas fa-times dark:text-white text-slate-400 xl:hidden" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap dark:text-white text-slate-700" href="" target="_blank">
            <img src="../assets/img/logo-ct-dark.png" class="inline h-full max-w-full transition-all duration-200 dark:hidden ease-nav-brand max-h-8" alt="main_logo" />
            <img src="../assets/img/logo-ct.png" class="hidden h-full max-w-full transition-all duration-200 dark:inline ease-nav-brand max-h-8" alt="main_logo" />
            <span class="ml-1 font-semibold transition-all duration-200 ease-nav-brand">Fanlar</span>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent dark:bg-gradient-to-r dark:from-transparent dark:via-white dark:to-transparent" />

    <div class="items-center block w-auto max-h-screen overflow-auto h-sidenav grow basis-full">
        <ul class="flex flex-col pl-0 mb-0">

            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Account pages</h6>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="profile">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                </a>
            </li>
            @if(auth()->user()->role=="owner")
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors " href="{{ route('sciences') }}">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-orange-500 fas fa-table" style="color: #002e83"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Fanlar</span>
                    </a>
                </li>
            @endif
        </ul>
    </div>
</aside>

<main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">
    <!-- Navbar -->
    <nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
        <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
            <nav>
                <!-- breadcrumb -->
                <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                    <li class="text-sm leading-normal">
                        <a class="text-white opacity-50" href="/topics?id={{$science->id}}">{{$science->name}}</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">{{$topic->name}}</li>
                </ol>
                <h6 class="mb-0 font-bold text-white capitalize">{{$topic->name}}</h6>
            </nav>
        </div>
    </nav>

    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white">{{$topic->name}} fani darliklari jadvali</h6>
                    </div>
                </div>




                <div class="flex flex-wrap -mx-3">

                    <div class="w-full max-w-full px-3 mb-8 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-2/4">
                        <form action="{{route('Test.store')}}" method="POST">
                            @csrf
                            <input style="display: none" value="{{$topic->id}}" name="topic_id">
                            <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                <div class="flex-auto px-0 pt-0 pb-2">
                                    <div class="p-0 overflow-x-auto">
                                        <div class="flex flex-wrap">
                                            <div class="flex-auto pl-3">
                                                <div>
                                                    <label class="dark:text-white">Test savoli</label>
                                                </div>
                                                <div class="flex flex-row -mx-3 p-3">
                                                    <input value="" type="text" class="pl-2 text-sm focus:shadow-primary-outline ease leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Kiriting ..." required name="question_name">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="flex-auto w-full pl-3">
                                            <div>
                                                <label class="dark:text-white">Variantlar</label>
                                            </div>
                                            <div class="-mx-3 w-full p-3">
                                                <div id="variant_add">
                                                    <div>
                                                        <input type="radio" required name="true" value="0">
                                                        <input value="" type="text" class="pl-2 text-sm w-4/5 focus:shadow-primary-outline ease leading-5.6 relative -ml-px flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Kiriting ..." required name="variant[]"><br>
                                                    </div>
                                                    <div>
                                                        <input type="radio" name="true" value="1">
                                                        <input value="" type="text" class="pl-2 text-sm w-4/5 focus:shadow-primary-outline ease leading-5.6 relative -ml-px flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Kiriting ..." required name="variant[]"><br>
                                                    </div>
                                                </div>
                                                <div class="flex flex-row -mx-3 w-1/2 p-3">
                                                    <button type="button" onclick="variant()" style="background: #108300; color: white" class="flex-none w-full max-w-full px-3  break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border p-4">
                                                        Variant qo`shish
                                                    </button>
                                                </div>
                                                <div class="flex flex-row -mx-3 w-1/2 p-3">
                                                    <button type="submit" style="background: #002e83; color: white" class="flex-none w-full max-w-full px-3  break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border p-4">
                                                        Saqlash
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>


                    <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-2/4">
                        @foreach($data as $val)
                            <?php $variant=json_decode($val->variant); ?>
                        <form action="{{route('Test.update',$val->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="relative flex flex-col min-w-0 break-words mb-4 bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                <div class="flex-auto px-0 pt-0 pb-2">
                                    <div class="p-0 overflow-x-auto">
                                        <div class="flex flex-wrap">
                                            <div class="flex-auto pl-3">
                                                <div>
                                                    <label class="dark:text-white">Test savoli</label>
                                                </div>
                                                <div class="flex flex-row -mx-3 p-3">
                                                    <input value="{{$val->question}}" type="text" class="pl-2 text-sm focus:shadow-primary-outline ease leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Kiriting ..." required name="question_name">
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <div class="flex-auto w-full pl-3">
                                            <div>
                                                <label class="dark:text-white">Variantlar</label>
                                            </div>
                                            <div class="-mx-3 w-full p-3">
                                                <div id="variant_add{{$val->id}}">
                                                    @foreach($variant as $k=>$v)
                                                    <div>
                                                        <input type="radio" required name="true[{{$val->id}}]" value="{{$k}}" @if($val->true==$k) checked @endif>
                                                        <input value="{{$v}}" type="text" class="pl-2 text-sm w-4/5 focus:shadow-primary-outline ease leading-5.6 relative -ml-px flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Kiriting ..." required name="variant[{{$val->id}}][]"><br>
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <div class="flex flex-row -mx-3 w-1/2 p-3">
                                                    <input id="vn{{$val->id}}" style="display: none" value="{{count($variant)-1}}">
                                                    <button type="button" onclick="variant_n({{$val->id}})" style="background: #108300; color: white" class="flex-none w-full max-w-full px-3  break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border p-4">
                                                        Variant qo`shish
                                                    </button>
                                                </div>
                                                <div class="flex flex-row -mx-3 w-1/2 p-3">
                                                    <button type="submit" style="background: #002e83; color: white" class="flex-none w-full max-w-full px-3  break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border p-4">
                                                        Saqlash
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        @endforeach
                    </div>
                </div>









            </div>
        </div>
    </div>
</main>


<form style="display: none" method="POST" action="{{ url('/showtp') }}" enctype="multipart/form-data" onsubmit="return onsubmitForm(this);">
    @csrf
    <input id="showtp" required name="id">

    <input id="tpbtn" type="submit">
</form>

<script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
        var options = {
            damping: '0.5'
        }
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
</script>

<script>
    function addsc() {
        Swal.fire({
            title: 'Video joylash',
            html: '<form action="{{ route('Topics.store')}}" method="POST" role="form"  enctype="multipart/form-data">'+'@csrf'+'<label>Mavzu</label><div class="mb-5"><input type="text" style="border-radius: 5px; width: 300px" placeholder="Kiriting..." required name="name"></div>'+
                '<div class="mb-3"><input style="display: none" value="{{$topic->id}}" required name="science_id"><input type="file" accept="video/mp4" style="border-radius: 5px; width: 300px" placeholder="" required name="video"></div>'+
                '<button id="addbtn" type="submit" style="display: none"></button></form>',
            showCancelButton: true,
            confirmButtonText: 'Save',
        }).then((result) => {
            /* Read more about isConfirmed, isDenied below */
            if (result.isConfirmed) {
                document.getElementById('addbtn').click();
                Swal.fire('Saqlandi, iltimos qayta yuklash amalga oshguncha kuting!', '', 'success')
            } else if (result.isDenied) {
                Swal.fire('Changes are not saved', '', 'info')
            }
        });
    }
</script>
<script>

    function onsubmitForm(form) {
        // create AJAX instance
        var ajax = new XMLHttpRequest();

        // open the request
        ajax.open("POST", form.getAttribute("action"), true);

        ajax.onreadystatechange = function () {
            // when the request is successfull
            if (this.readyState == 4 && this.status == 200) {
                // convert the JSON response into Javascript object
                var data = JSON.parse(this.responseText)['data'];
                let id=data['id'];
                let name=data['name'];
                console.log(data);
                Swal.fire({
                    title: 'Mavzuni tahrirlash',
                    html: '<form action="{{ url('/Topics') }}/'+id+'" method="POST" role="form"  enctype="multipart/form-data">'+'@csrf'+'@method('PUT')'+'<label>Mavzu</label><div class="mb-5"><input type="text" style="border-radius: 5px; width: 300px" placeholder="Kiriting..." required name="name" value="'+
                        name+'"></div>'+
                        '<div class="mb-3"><input type="file" accept="video/mp4" style="border-radius: 5px; width: 300px" placeholder="" name="video"></div>'+
                        '<button id="edbtn" type="submit" style="display: none"></button></form>',
                    showCancelButton: true,
                    confirmButtonText: 'Save',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed)
                    {
                        document.getElementById('edbtn').click();
                        Swal.fire('Saqlandi, iltimos qayta yuklash amalga oshguncha kuting!', '', 'success')
                    } else if (result.isDenied) {
                        Swal.fire('Changes are not saved', '', 'info')
                    }
                });
            }
        };

        var formData = new FormData(form);
        ajax.send(formData);
        return false;
    }
</script>
<script src="{{asset("jquery.min.js")}}"></script>
<script>
    let number=1;
    function variant()
    {
        number=number+1;
        console.log(number);
        let addhtml='<div><input type="radio" required name="true" value="'+
            number+'"><input value="" type="text" class="pl-2 text-sm w-4/5 focus:shadow-primary-outline ease leading-5.6 relative -ml-px flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Kiriting ..." required name="variant[]"><br></div>'
        $('#variant_add').append(addhtml);
    }
    function variant_n(id)
    {
        number=document.getElementById('vn'+id).value=parseInt(document.getElementById('vn'+id).value)+1;
        let addhtml='<div><input type="radio" required name="true['+
            id+']" value="'+
            number+'"><input value="" type="text" class="pl-2 text-sm w-4/5 focus:shadow-primary-outline ease leading-5.6 relative -ml-px flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Kiriting ..." required name="variant['+
            id+'][]"><br></div>'
        $('#variant_add'+id).append(addhtml);
    }
</script>
</body>
</html>
