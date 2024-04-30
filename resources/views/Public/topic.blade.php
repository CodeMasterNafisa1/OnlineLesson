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
    <title>Fanlar</title>
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

            @foreach($data as $val)
                <?php
                    $dd=\Illuminate\Support\Facades\DB::select("select * from checks where user_id=".auth()->id()." && topic_id=".$val->id);
                ?>
                @if($topic->id==$val->id)
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 bg-blue-500/13 dark:text-white dark:opacity-80 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap rounded-lg px-4 font-semibold text-slate-700 transition-colors " href="{{ route('Science.show',$science->name) }}?name={{$val->name}}">
                            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                @if(count($dd)!=0)
                                    @if($dd[0]->score>=90)
                                        <i class="relative top-0 text-sm leading-normal text-slate-700 fas fa-check-circle p-2" style="color: #002aff"></i>
                                    @else
                                        <i class="relative top-0 text-sm leading-normal text-slate-700 p-2" style="color: #ff0000">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle" viewBox="0 0 16 16">
                                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                                <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                            </svg>
                                        </i>
                                    @endif
                                @endif
                                <i class="relative top-0 text-sm leading-normal text-slate-700 fas fa-book" style="color: #ff7400"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">{{$val->name}}</span>
                        </a>
                    </li>
                @else
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{ route('Science.show',$science->name) }}?name={{$val->name}}">
                            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                @if(count($dd)!=0)
                                    <i class="relative top-0 text-sm leading-normal text-slate-700 fas fa-check-circle p-2" style="color: #002aff"></i>
                                @endif
                                <i class="relative top-0 text-sm leading-normal text-slate-700 fas fa-book" style="color: #ff7400"></i>
                            </div>
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">{{$val->name}}</span>
                        </a>
                    </li>
                @endif
            @endforeach

            <form action="{{route('Certificates.store')}}" method="POST">
                @csrf
                <input style="display: none" value="{{$science->id}}" name="science_id">
                @if($sc)
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{ route('Science.show',$science->name) }}?name={{$val->name}}">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-slate-700 fas fa-check-circle p-2" style="color: #002aff"></i>
                            <i class="relative top-0 text-sm leading-normal text-slate-700 fas fa-book" style="color: #ff7400"></i>
                        </div>
                        <button type="submit">
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Yakunlash va sertifikat</span>
                        </button>
                    </a>
                </li>
                @else
                    <li class="mt-0.5 w-full">
                        <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="">
                            <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                                <i class="relative top-0 text-sm leading-normal text-slate-700 fas fa-book" style="color: #ff7400"></i>
                            </div>
                            <button type="submit">
                            <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Yakunlash va sertifikat</span>
                            </button>
                        </a>
                    </li>
                @endif
            </form>
            <li class="w-full mt-4">
                <h6 class="pl-6 ml-2 text-xs font-bold leading-tight uppercase dark:text-white opacity-60">Account pages</h6>
            </li>
            <li class="mt-0.5 w-full">
                <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{url("/profile")}}">
                    <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                        <i class="relative top-0 text-sm leading-normal text-slate-700 ni ni-single-02"></i>
                    </div>
                    <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">Profile</span>
                </a>
            </li>
            @if(auth()->user()->role=="owner")
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{ route('sciences') }}">
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
                        <a class="text-white opacity-50" href="javascript:;">Pages</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">Fanlar</li>
                </ol>
                <h6 class="mb-0 font-bold text-white capitalize">Fanlar</h6>
            </nav>
        </div>
    </nav>

    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->
        <form action="{{route('Check.store')}}" method="POST">
            @csrf
            <input style="display: none" value="{{$topic->id}}" name="id">
            <div class="flex flex-wrap -mx-3">
                <div class="flex-none w-full max-w-full px-3">
                    <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                        <div class="flex-auto px-0 pt-0 pb-2">
                            <div class="p-5 overflow-x-auto mb-3" align="center">



                                <video id="video" class="w-full" controls>
                                    @if($topic->type=="file")
                                        <source src="{{asset('Video/'.$topic->video)}}" type="video/mp4">
                                    @else
                                        <source src="{{$topic->video}}" type="video/mp4">
                                    @endif
                                    Your browser does not support the video tag.
                                </video>




                                <div id="test" style="display: none" class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-2/4">
                                    @foreach($tests as $val)
                                            <?php $variant=json_decode($val->variant); ?>
    {{--                                    <form action="{{route('Test.update',$val->id)}}" method="POST">--}}
    {{--                                        @csrf--}}
    {{--                                        @method('PUT')--}}
                                            <div class="relative flex flex-col min-w-0 break-words mb-4 bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                                                <div class="flex-auto px-0 pt-0 pb-2">
                                                    <div class="p-0 overflow-x-auto">
                                                        <div class="flex flex-wrap">
                                                            <div class="flex-auto pl-3">
                                                                <div>
                                                                    <label class="dark:text-white">Test savoli</label>
                                                                </div>
                                                                <div class="flex flex-row -mx-3 p-3">
                                                                    <textarea disabled type="text" class="pl-2 text-sm focus:shadow-primary-outline ease leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Kiriting ..." required name="question_name">{{$val->question}}</textarea>
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
                                                                            <input type="radio" required name="true[{{$val->id}}]" value="{{$k}}">
                                                                            <input disabled value="{{$v}}" type="text" class="pl-2 text-sm w-4/5 focus:shadow-primary-outline ease leading-5.6 relative -ml-px flex-auto rounded-lg border border-solid border-gray-300 dark:bg-slate-850 dark:text-white bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Kiriting ..." required name="variant[{{$val->id}}][]"><br>
                                                                        </div>
                                                                    @endforeach
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
    {{--                                    </form>--}}
                                    @endforeach
                                </div>

                            </div>
                            <br>
                            <div class="flex flex-wrap">
                                <div class="flex-auto pl-3 w-4/5">
                                </div>
                                <div class="flex-auto pl-3 w-1/5">
                                    <div align="end">
                                        <button id="tbtn" type="button" onclick="test()" style="background: #0a58ca; color: white" class="flex-none w-full max-w-full px-3  break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border p-4">
                                            Testga o`tish
                                        </button>
                                    </div>
                                    <div>
                                        <button id="sbtn" type="submit" style="display: none; background: #0a58ca; color: white" class="flex-none w-full max-w-full px-3  break-words bg-white shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border p-4">
                                            Saqlash
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</main>


<form style="display: none" method="POST" action="{{ url('/showsc') }}" enctype="multipart/form-data" onsubmit="return onsubmitForm(this);">
    @csrf
    <input id="showsc" required name="id">

    <input id="scbtn" type="submit">
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

<input type="text" style="border-radius: 5px">
<script>
    function addsc() {
        Swal.fire({
            title: 'Yangi Fan qo`shish',
            html: '<form action="{{ route('Science.store')}}" method="POST" role="form">'+'@csrf'+'<label>Fan nomi</label><div class="mb-3"><input type="text" style="border-radius: 5px; width: 300px" placeholder="Kiriting..." required name="science"></div><button id="addbtn" type="submit" style="display: none"></button></form>',
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

                Swal.fire({
                    title: 'Fanni tahrirlash',
                    html: '<form action="{{ url('/Science') }}/'+id+'" method="POST" role="form">'+'@csrf'+'@method('PUT')'+'<label>Fan nomi</label><div class="mb-3"><input type="text" style="border-radius: 5px; width: 300px" placeholder="Kiriting..." required name="science" value="'+name+'"></div><button id="editbtn" type="submit" style="display: none"></button></form>',
                    showCancelButton: true,
                    confirmButtonText: 'Save',
                }).then((result) => {
                    /* Read more about isConfirmed, isDenied below */
                    if (result.isConfirmed)
                    {
                        document.getElementById('editbtn').click();
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
<script>
    function test()
    {
        document.getElementById('video').style="display: none";
        document.getElementById('test').style="";
        document.getElementById('tbtn').style="display: none";
        document.getElementById('sbtn').style="background: #0a58ca; color: white";
    }
</script>
</body>
</html>

