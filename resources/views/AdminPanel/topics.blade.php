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
    <title>{{$science->name}}</title>
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
                <li class="mt-0.5 w-full">
                    <a class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors dark:text-white dark:opacity-80" href="{{ route('Science.show',$val->name) }}">
                        <div class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5">
                            <i class="relative top-0 text-sm leading-normal text-slate-700 fas fa-book" style="color: #ff7400"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">{{$val->name}}</span>
                    </a>
                </li>
            @endforeach

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
                        <a class="text-white opacity-50" href="/sciences">Fanlar</a>
                    </li>
                    <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page">{{$science->name}}</li>
                </ol>
                <h6 class="mb-0 font-bold text-white capitalize">{{$science->name}}</h6>
            </nav>
        </div>
    </nav>

    <div class="w-full px-6 py-6 mx-auto">
        <!-- table 1 -->

        <div class="flex flex-wrap -mx-3">
            <div class="flex-none w-full max-w-full px-3">
                <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl dark:bg-slate-850 dark:shadow-dark-xl rounded-2xl bg-clip-border">
                    <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent">
                        <h6 class="dark:text-white">{{$science->name}} fani darsliklari jadvali</h6>
                    </div>
                    <div align="end" class="container">
                        <button type="button" onclick="addsc()">
                            <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                            </svg>
                        </button>
                    </div>
                    <div class="flex-auto px-0 pt-0 pb-2">
                        <div class="p-0 overflow-x-auto">
                            <table class="items-center w-full mb-0 align-top border-collapse dark:border-white/40 text-slate-500">
                                <thead class="align-bottom">
                                <tr>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle bg-transparent border-b border-collapse shadow-none dark:border-white/40 dark:text-white text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                                    <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                                    <th class="px-6 py-3 font-semibold capitalize align-middle bg-transparent border-b border-collapse border-solid shadow-none dark:border-white/40 dark:text-white tracking-none whitespace-nowrap text-slate-400 opacity-70"></th>
                                </tr>
                                </thead>
                                <tbody>

                                @foreach($data as $val)
                                    <tr>
                                        <form action="{{ route('Topics.destroy',$val->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2 py-1">
                                                    <div class="flex flex-col justify-center">
                                                        <video style="width: 500px" controls>
                                                            @if($val->type=="file")
                                                                <source src="{{asset('Video/'.$val->video)}}" type="video/mp4">
                                                            @else
                                                                <source src="{{$val->video}}" type="video/mp4">
                                                            @endif
                                                            Your browser does not support the video tag.
                                                        </video>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <div class="flex px-2 py-1">
                                                    <div class="flex flex-col justify-center">
                                                        <a href="{{url('/tests?id='.$val->id)}}"><h1 class="mb-0 text-sm leading-normal dark:text-white">{{$val->name}}</h1></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td align="end" class="p-2 align-middle bg-transparent border-b dark:border-white/40 whitespace-nowrap shadow-transparent">
                                                <button type="button" onclick="document.getElementById('showtp').value='{{$val->id}}'; document.getElementById('tpbtn').click();" class="btn btn-warning m-6">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: #df9700" width="30" height="30" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                                        <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                                                    </svg>
                                                </button>
                                                <button class="btn btn-danger">
                                                    <svg xmlns="http://www.w3.org/2000/svg" style="color: red" width="30" height="30" fill="currentColor" class="bi bi-trash m-6" viewBox="0 0 16 16">
                                                        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                </button>
                                            </td>
                                        </form>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
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
            html: '<form action="{{ route('Topics.store')}}" method="POST" role="form"  enctype="multipart/form-data">'+'@csrf'+'<input id="fu" style="display: none" value="file" name="file_url"><label><a id="url_id" onclick="file()" style="color: black">File</a> or <a id="file_id" onclick="url()">Url</a></label><div class="mb-5 p-3"><input type="text" style="border-radius: 5px; width: 300px" placeholder="Video nomini kiriting..." required name="name"></div>'+
                '<div class="mb-3"><input style="display: none" value="{{$science->id}}" required name="science_id"><input id="file_url" type="file" accept="video/mp4" style="border-radius: 5px; width: 300px" placeholder="Videoning url manzilini kiriting..." required name="video"></div>'+
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
                    title: 'Videoni tahrirlash',
                    html: '<form action="{{ url('/Topics') }}/'+id+'" method="POST" role="form"  enctype="multipart/form-data">'+'@csrf'+'@method('PUT')'+'<input id="efu" style="display: none" value="file" name="file_url"><label><a id="edit_url_id" onclick="edit_file()" style="color: black">File</a> or <a id="edit_file_id" onclick="edit_url()">Url</a></label><div class="mb-5 p-3"><input type="text" style="border-radius: 5px; width: 300px" placeholder="Video nomini kiriting..." required name="name" value="'+
                        name+'"></div>'+
                        '<div class="mb-3"><input id="edit_file_url" type="file" accept="video/mp4" style="border-radius: 5px; width: 300px" placeholder="Videoning url manzilini kiriting..." name="video"></div>'+
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
<script>
    function url(){
        document.getElementById('file_url').type='text';
        document.getElementById('fu').value='url';
        document.getElementById('url_id').style='';
        document.getElementById('file_id').style="color: black";
    }
    function file()
    {
        document.getElementById('file_url').type='file';
        document.getElementById('fu').value='file';
        document.getElementById('file_id').style='';
        document.getElementById('url_id').style="color: black";
    }
    function edit_url(){
        document.getElementById('edit_file_url').type='text';
        document.getElementById('efu').value='url';
        document.getElementById('edit_url_id').style='';
        document.getElementById('edit_file_id').style="color: black";
    }
    function edit_file()
    {
        document.getElementById('edit_file_url').type='file';
        document.getElementById('efu').value='file';
        document.getElementById('edit_file_id').style='';
        document.getElementById('edit_url_id').style="color: black";
    }
</script>
</body>
</html>
