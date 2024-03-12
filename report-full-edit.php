<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php include('templates/head.php'); ?>

<link rel="stylesheet" href="assets/libs/filepond/filepond.min.css">
<link rel="stylesheet" href="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.css">
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="assets/libs/mobius1-selectr/selectr.min.css">
<link rel="stylesheet" href="assets/libs/vanillajs-datepicker/css/datepicker.min.css">
<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="report-full-edit-page bg-[#EEF0FC] dark:bg-gray-900">

<!-- leftbar-tab-menu -->
<?php include('templates/left-bar.php'); ?>		
<!-- header -->
<?php include('templates/header.php'); ?>		

<div class="page-container ltr:flex flex-1 rtl:flex-row-reverse">
	<div class="page-wrapper relative ltr:ml-auto rtl:mr-auto rtl:ml-0 w-[calc(100%-260px)] px-4 pt-[64px] duration-300">
		<div class="breadcrumbs-container xl:w-full">
			<div class="flex flex-wrap">
				<div class="flex items-center py-4 w-full">
					<div class="w-full">
						<div class="flex flex-wrap justify-between">
							<div class="items-center">
								<h1 class="font-medium text-3xl block dark:text-slate-100">Izveštaji</h1>
								<ol class="list-reset flex text-sm">
									<li>
										<a href="#" class="text-gray-500 dark:text-slate-400">Ekozaštita</a>
									</li>
									<li>
										<span class="text-gray-500 dark:text-slate-400 mx-2">/</span>
									</li>
									<li class="text-primary-500 hover:text-primary-600 dark:text-primary-400">Izveštaji</li>
								</ol>
							</div>
							<!-- <div class="flex items-center">
								<div class="today-date leading-5 mt-2 lg:mt-0 form-input w-auto rounded-md border inline-block border-primary-500/60 dark:border-primary-500/60 text-primary-500 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-primary-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700">
									<input type="text" class="dash_date border-0 focus:border-0 focus:outline-none" readonly required="" />
								</div>
							</div> -->
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="xl:w-full  min-h-[calc(100vh-152px)] relative pb-14">                                   
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 ">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-12 xl:col-span-12 ">
                    <div class="w-full relative overflow-hidden">                   
                        <div class="p-0 xl:p-4">                        
                            <div class="mb-4 border-b border-dashed border-gray-200 dark:border-gray-700 flex flex-wrap justify-start lg:justify-between" data-fc-type="tab">                            
                                <ul class="flex flex-wrap mb-5 lg:-mb-px" aria-label="Tabs">
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="deratizacija-tab" data-fc-target="#tab-1"  type="button" role="tab" aria-controls="deratizacija" aria-selected="false">Deratizacija</button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="dezinfekcija-tab" data-fc-target="#tab-2"  type="button" role="tab" aria-controls="dezinfekcija" aria-selected="false">Dezinfekcija</button>
                                    </li>
                                    <li class="mr-2" role="presentation">
                                        <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700 active" id="dezinsekcija-tab" data-fc-target="#tab-3"  type="button" role="tab" aria-controls="dezinsekcija" aria-selected="false">Dezinsekcija</button>
                                    </li>
                                    <li role="presentation">
                                        <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="ostale-usluge-tab" data-fc-target="#tab-4" type="button" role="tab" aria-controls="ostale-usluge" aria-selected="false">Ostale usluge</button>
                                    </li>
                                    <li role="presentation">
                                        <button class="inline-block py-4 px-4 text-sm font-medium text-center text-gray-500 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:text-gray-400 dark:hover:text-gray-300 border-gray-100 dark:border-gray-700" id="korisceni-preprati-tab" data-fc-target="#tab-5" type="button" role="tab" aria-controls="korisceni-preprati" aria-selected="false">Koriščeni preprati</button>
                                    </li>
                                </ul>                         
                            </div>
                        </div>
                    </div>
                </div><!--end col--> 
            </div>  
            
            <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-3 xl:col-span-3 ">
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                        <div class="flex-auto p-4">
                            <h5 class="text-lg font-medium text-slate-700 dark:text-slate-300 mb-3">Izveštaj 1450 <i class="fas fa-minus text-primary-500"></i></h5>
                            <form action="javascript:;" class="flex-auto p-0 md:p-4">
                                <div class="mb-2 select-bg-transparent">
                                    <label for="default" class="font-medium text-sm text-slate-600 dark:text-slate-400">Izveštaj za klijenta</label>
                                    <select id="default" name="company" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700">
                                        <option>Delhaize Serbia d.o.o.</option>
                                        <option>Delhaize Serbia d.o.o. 2</option>
                                        <option>Delhaize Serbia d.o.o. 3</option>
                                    </select>
                                </div>
                                <div class="mb-2">
                                    <label for="type" class="font-medium text-sm text-slate-600 dark:text-slate-400">Objekat</label>
                                    <input type="text" id="type" name="type" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Tip objekta" required>
                                </div>
                                <div class="mb-2">
                                    <label for="address" class="font-medium text-sm text-slate-600 dark:text-slate-400">Adresa</label>
                                    <input type="text" id="address" name="address" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Adresa" required>
                                </div>
                                <div class="mb-2">
                                    <label for="town" class="font-medium text-sm text-slate-600 dark:text-slate-400">Grad</label>
                                    <input type="text" id="town" name="town" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Grad" required>
                                </div>
                                <div class="mb-2">
                                    <label for="state" class="font-medium text-sm text-slate-600 dark:text-slate-400">Broj izveštaja</label>
                                    <input type="text" id="state" name="state" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Zemlja" required>
                                </div>
                                <div class="mb-2">
                                    <label for="date" class="font-medium text-sm text-slate-600 dark:text-slate-400">Datum</label>
                                    <input id="date" name="date" class="flatpickr form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500 dark:hover:border-slate-700" type="text" placeholder="Select Date.." readonly="readonly">
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Izvršilac</label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Deratizacione kutije</label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Zamke sa lepkom</label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Insekt lampe</label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>
                                <div class="mb-2">
                                    <label for="contact_name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Feromonske klopke</label>
                                    <input type="text" id="contact_name" name="contact_name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-brand-500 dark:focus:border-brand-500 dark:hover:border-slate-700" placeholder="Kontakt osoba" required>
                                </div>						
                                <div class="">
                                    <button class="px-2 py-2 lg:px-4 bg-brand  text-white text-sm  rounded hover:bg-brand-600 border border-brand-500">Snimi</button>
                                    <!-- <button class="px-2 py-2 lg:px-4 bg-transparent  text-brand text-sm  rounded transition hover:bg-brand-500 hover:text-white border border-brand font-medium">Save Product</button> -->
                                </div>
                            </form>
                        </div><!--end card-body-->
                    </div> <!--end card-->
                </div><!--end col--> 
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                    <div class="w-full relative overflow-hidden">             
                        <div class="p-0"> 
                            <div id="myTabContent">
                                <div class="hidden" id="tab-1" role="tabpanel" aria-labelledby="deratizacija-tab">
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4 mb-4">
                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="flex-auto p-4">
                                                    <div class="flex items-center mb-4">
                                                        <img src="assets/images/users/avatar-9.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                        <div class="self-center">                                                
                                                            <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Joseph Rust <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                            <span class="text-slate-500 mr-2 text-sm">Software Engineer</span>
                                                        </div>
                                                    </div> 
                                                    <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <div class="flex flex-wrap content-between mt-4">
                                                        <div class="flex -space-x-4">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-2.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-9.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-1.png" alt="">
                                                            <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+6</a>
                                                        </div>
                                                        <div class="ml-0 lg:ml-auto self-center">
                                                            <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                        </div>
                                                    </div>                                                           
                                                    <div class="grid grid-cols-4 gap-4 mt-4">
                                                        <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                            <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Following</button>
                                                            <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                        </div>
                                                    </div>
                                                    
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col--> 
                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="flex-auto p-4">
                                                    <div class="flex items-center mb-4">
                                                        <img src="assets/images/users/avatar-4.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                        <div class="self-center">                                                
                                                            <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Betty Jenkins <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                            <span class="text-slate-500 mr-2 text-sm">React Developer</span>
                                                        </div>
                                                    </div> 
                                                    <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <div class="flex flex-wrap content-between mt-4">
                                                        <div class="flex -space-x-4">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-2.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-9.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-1.png" alt="">
                                                            <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+8</a>
                                                        </div>
                                                        <div class="ml-0 lg:ml-auto self-center">
                                                            <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                        </div>
                                                    </div>                                                           
                                                    <div class="grid grid-cols-4 gap-4 mt-4">
                                                        <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                            <button class="inline-block focus:outline-none text-white hover:bg-primary-500 hover:text-white bg-primary-500 border border-primary-200 dark:bg-primary-500 dark:text-primary-500 dark:hover:text-white dark:border-primary-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Follow</button>
                                                            <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                        </div>
                                                    </div>
                                                    
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col--> 
                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="flex-auto p-4">
                                                    <div class="flex items-center mb-4">
                                                        <img src="assets/images/users/avatar-2.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                        <div class="self-center">                                                
                                                            <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Rolando Paloso <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                            <span class="text-slate-500 mr-2 text-sm">Web Developer</span>
                                                        </div>
                                                    </div> 
                                                    <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <div class="flex flex-wrap content-between mt-4">
                                                        <div class="flex -space-x-4">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-2.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-9.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-1.png" alt="">
                                                        </div>
                                                        <div class="ml-0 lg:ml-auto self-center">
                                                            <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                        </div>
                                                    </div>                                                           
                                                    <div class="grid grid-cols-4 gap-4 mt-4">
                                                        <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                            <button class="inline-block focus:outline-none text-white hover:bg-primary-500 hover:text-white bg-primary-500 border border-primary-200 dark:bg-primary-500 dark:text-primary-500 dark:hover:text-white dark:border-primary-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Follow</button>
                                                            <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                        </div>
                                                    </div>
                                                    
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col--> 
                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="flex-auto p-4">
                                                    <div class="flex items-center mb-4">
                                                        <img src="assets/images/users/avatar-3.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                        <div class="self-center">                                                
                                                            <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Arthur Mann <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                            <span class="text-slate-500 mr-2 text-sm">Python Developer</span>
                                                        </div>
                                                    </div> 
                                                    <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <div class="flex flex-wrap content-between mt-4">
                                                        <div class="flex -space-x-4">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-2.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-9.png" alt="">
                                                            <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+1</a>
                                                        </div>
                                                        <div class="ml-0 lg:ml-auto self-center">
                                                            <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                        </div>
                                                    </div>                                                           
                                                    <div class="grid grid-cols-4 gap-4 mt-4">
                                                        <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                            <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Following</button>
                                                            <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                        </div>
                                                    </div>
                                                    
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col--> 
                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="flex-auto p-4">
                                                    <div class="flex items-center mb-4">
                                                        <img src="assets/images/users/avatar-5.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                        <div class="self-center">                                                
                                                            <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Maricel Villalon <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                            <span class="text-slate-500 mr-2 text-sm">UI Developer</span>
                                                        </div>
                                                    </div> 
                                                    <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <div class="flex flex-wrap content-between mt-4">
                                                        <div class="flex -space-x-4">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-9.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-1.png" alt="">
                                                            <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+3</a>
                                                        </div>
                                                        <div class="ml-0 lg:ml-auto self-center">
                                                            <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                        </div>
                                                    </div>                                                           
                                                    <div class="grid grid-cols-4 gap-4 mt-4">
                                                        <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                            <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Following</button>
                                                            <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                        </div>
                                                    </div>                                                            
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col--> 
                                        <div class="sm:col-span-12  md:col-span-12 lg:col-span-6 xl:col-span-6 ">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="flex-auto p-4">
                                                    <div class="flex items-center mb-4">
                                                        <img src="assets/images/users/avatar-7.png" alt="" class="mr-3 h-12 inline-block rounded-full">
                                                        <div class="self-center">                                                
                                                            <h5 class="text-lg font-semibold text-slate-700 dark:text-gray-400 leading-3">Nicolas Wright <span class="bg-yellow-600/5 text-yellow-500 text-[11px] font-medium px-2.5 py-0.5 rounded h-5">3.6 <i class="mdi mdi-star"></i></span></h5>
                                                            <span class="text-slate-500 mr-2 text-sm">Designer</span>
                                                        </div>
                                                    </div> 
                                                    <p class="text-sm text-slate-600 dark:text-slate-400 font-medium mb-5">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                    <div class="flex flex-wrap content-between mt-4">
                                                        <div class="flex -space-x-4">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-2.png" alt="">                                                                    
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-8.png" alt="">
                                                            <img class="w-8 h-8 border-2 hover:z-1 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-1.png" alt="">
                                                            <a class="flex items-center justify-center w-8 h-8 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+2</a>
                                                        </div>
                                                        <div class="ml-0 lg:ml-auto self-center">
                                                            <button class="inline-block focus:outline-none text-slate-600 hover:bg-slate-100 hover:text-slate-700 bg-slate-50 border border-gray-50 dark:bg-slate-700 dark:text-slate-400 dark:hover:text-white dark:hover:border-slate-700/50 dark:border-gray-700 dark:hover:bg-slate-800  text-xs font-medium py-1 px-3 rounded">View Details <i class="mdi mdi-arrow-right"></i></button>
                                                        </div>
                                                    </div>                                                           
                                                    <div class="grid grid-cols-4 gap-4 mt-4">
                                                        <div class="col-span-4 md:col-span-2 lg:col-span-4 xl:col-span-4">
                                                            <button class="inline-block focus:outline-none text-white hover:bg-primary-500 hover:text-white bg-primary-500 border border-primary-200 dark:bg-primary-500 dark:text-primary-500 dark:hover:text-white dark:border-primary-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Follow</button>
                                                            <button class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-xs font-medium py-1 px-3 rounded">Send Email</button>
                                                        </div>
                                                    </div>                                                            
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col-->            
                                    </div>
                                </div><!--end tab-pan-->
                                <div class="hidden" id="tab-2" role="tabpanel" aria-labelledby="dezinfekcija-tab">
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="flex-auto p-4">                                    
                                                    <div class="absolute -top-2 -left-0"><i class="fas fa-circle text-green-500 text-xs"></i></div>
                                                    <p class="text-slate-400 text-sm float-right">
                                                        <span class="text-slate-400">01:33</span> / 
                                                        <span class="text-slate-400">9:30</span> 
                                                        <span class="mx-1">·</span> 
                                                        <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                    </p>
                                                    <h5 class="font-medium mt-0 dark:text-slate-200">Organic Farming</h5>
                                                    <p class="text-slate-400 mb-1">There are many variations of passages of Lorem Ipsum available, 
                                                        but the majority have suffered alteration in some form.
                                                    </p>
                                                    <form> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="First_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">First Name</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9 mb-2">
                                                                <input type="text" id="First_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Rosa" placeholder="First name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Last_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Last Name</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Last_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Dodson" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Company_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Company Name</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Company_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Example Themes" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Contact Phone</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Contact_Phone" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="+1 23456 7890" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Your_Email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your email</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="email" id="Your_Email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="example@example.com" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Website Link</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Contact_Phone" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="https://mannatthemes.com/" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ocena</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>United States</option>
                                                                    <option>Canada</option>
                                                                    <option>France</option>
                                                                    <option>Germany</option>
                                                                </select>
                                                            </div><!--end col-->
                                                            <div class=" col-start-4 col-end-13  mb-2">
                                                                <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Submit</button>
                                                                <button type="submit" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded">Cancel</button>
                                                            </div><!--end col-->
                                                        </div><!--end grid-->
                                                    </form>
                                                     
                                                </div><!--end card-body-->
                                            </div><!--end card--> 
                                        </div><!--end col-->
                                        <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="flex-auto p-4">                                    
                                                    <div class="absolute -top-2 -left-0"><i class="fas fa-circle text-slate-400 text-xs"></i></div>
                                                    <p class="text-slate-400 text-sm float-right">
                                                        <span class="text-slate-400">01:33</span> / 
                                                        <span class="text-slate-400">9:30</span> 
                                                        <span class="mx-1">·</span> 
                                                        <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                    </p>
                                                    <h5 class="font-medium mt-0 dark:text-slate-200">Transfer Money</h5>
                                                    <p class="text-slate-400 mb-1">There are many variations of passages of Lorem Ipsum available, 
                                                        but the majority have suffered alteration in some form.
                                                    </p>
                                                    <div class="my-3">
                                                        <div class="flex justify-between mb-1">
                                                            <span class="text-sm font-medium text-slate-700 dark:text-white">T-Wind</span>
                                                            <span class="text-sm font-medium text-slate-700 dark:text-white">45% Complete</span>
                                                        </div>
                                                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                                                            <div class="bg-blue-500 h-1 rounded-full" style="width: 45%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <div class="flex -space-x-4">
                                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-6.png" alt="">
                                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-1.png" alt="">
                                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-4.png" alt="">
                                                            <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+9</a>
                                                        </div> 
                                                        <ul class="mb-0 self-center">                                                                    
                                                            <li class="inline-block mr-2">
                                                                <a class="" href="#">
                                                                    <i class="mdi mdi-format-list-bulleted text-green-500 text-base"></i>
                                                                    <span class="text-slate-400 font-medium">15/100</span>
                                                                </a>
                                                            </li>
                                                            <li class="inline-block">
                                                                <a class="" href="#">
                                                                    <i class="mdi mdi-comment-outline text-primary text-base"></i>
                                                                    <span class="text-slate-400 font-medium">3</span>
                                                                </a>                                                                               
                                                            </li>
                                                            <li class="inline-block">
                                                                <a class="ml-2" href="#">
                                                                    <i class="mdi mdi-pencil-outline text-slate-400 font-18"></i>
                                                                </a>                                                                               
                                                            </li>
                                                            <li class="inline-block">
                                                                <a class="" href="#">
                                                                    <i class="mdi mdi-trash-can-outline text-slate-400 font-18"></i>
                                                                </a>                                                                               
                                                            </li>
                                                        </ul>
                                                    </div> 
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                        <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="flex-auto p-4">                                    
                                                    <div class="absolute -top-2 -left-0"><i class="fas fa-circle text-green-500 text-xs"></i></div>
                                                    <p class="text-slate-400 text-sm float-right">
                                                        <span class="text-slate-400">01:33</span> / 
                                                        <span class="text-slate-400">9:30</span> 
                                                        <span class="mx-1">·</span> 
                                                        <span><i class="far fa-fw fa-clock"></i> June 06</span>
                                                    </p>
                                                    <h5 class="font-medium mt-0 dark:text-slate-200">Mobile Account Setting</h5>
                                                    <p class="text-slate-400 mb-1">There are many variations of passages of Lorem Ipsum available, 
                                                        but the majority have suffered alteration in some form.
                                                    </p>
                                                    <div class="my-3">
                                                        <div class="flex justify-between mb-1">
                                                            <span class="text-sm font-medium text-slate-700 dark:text-white">T-Wind</span>
                                                            <span class="text-sm font-medium text-slate-700 dark:text-white">45% Complete</span>
                                                        </div>
                                                        <div class="w-full bg-gray-200 rounded-full h-1 dark:bg-gray-700">
                                                            <div class="bg-blue-500 h-1 rounded-full" style="width: 45%"></div>
                                                        </div>
                                                    </div>
                                                    <div class="flex justify-between">
                                                        <div class="flex -space-x-4">
                                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-3.png" alt="">
                                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-9.png" alt="">
                                                            <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="assets/images/users/avatar-2.png" alt="">
                                                            <a class="flex items-center justify-center w-10 h-10 text-xs font-medium text-white bg-gray-700 border-2 border-white rounded-full hover:bg-gray-600 dark:border-gray-800" href="#">+9</a>
                                                        </div> 
                                                        <ul class="mb-0 self-center">                                                                    
                                                            <li class="inline-block mr-2">
                                                                <a class="" href="#">
                                                                    <i class="mdi mdi-format-list-bulleted text-green-500 text-base"></i>
                                                                    <span class="text-slate-400 font-medium">15/100</span>
                                                                </a>
                                                            </li>
                                                            <li class="inline-block">
                                                                <a class="" href="#">
                                                                    <i class="mdi mdi-comment-outline text-primary text-base"></i>
                                                                    <span class="text-slate-400 font-medium">3</span>
                                                                </a>                                                                               
                                                            </li>
                                                            <li class="inline-block">
                                                                <a class="ml-2" href="#">
                                                                    <i class="mdi mdi-pencil-outline text-slate-400 font-18"></i>
                                                                </a>                                                                               
                                                            </li>
                                                            <li class="inline-block">
                                                                <a class="" href="#">
                                                                    <i class="mdi mdi-trash-can-outline text-slate-400 font-18"></i>
                                                                </a>                                                                               
                                                            </li>
                                                        </ul>
                                                    </div> 
                                                </div><!--end card-body-->
                                            </div><!--end card-->
                                        </div><!--end col-->
                                        <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                                    <div class="flex items-center space-x-2 w-full">                                                    
                                                    <form class="w-full"> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ocena</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Komentar</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Write a comment and press enter"></textarea>
                                                            </div><!--end col-->
                                                             <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Fotografija</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
                                                                    <div class="w-full relative p-4"> 
                                                                        <div class="w-full h-56 mx-auto mb-4">
                                                                            <input type="file" class="filepond h-56" name="filepond" accept="image/png, image/jpeg, image/gif" />                                    
                                                                        </div>
                                                                        <div id="uploads-container" class="grid grid-cols-2 gap-2">
                                                                            <input type="file" class="filepond"/>
                                                                            <input type="file" class="filepond"/>
                                                                        </div>
                                                                        <div class="btn-holder col-span-12 text-center mt-5">
                                                                            <button id="add-more-uploads" type="button" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm  rounded-full transition hover:bg-primary-600 border border-primary font-medium">Dodaj još fotografija</button>
                                                                        </div>
                                                                    </div>                               
                                                                </div>
                                                            </div>                                                            
                                                            <div class=" col-start-4 col-end-13  mb-2">
                                                                <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Snimi</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>                                              
                                    </div> 
                                </div>
                                <div class="active" id="tab-3" role="tabpanel" aria-labelledby="dezinskecija-tab">
                                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                                        <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                            <div class="flex sm:items-center justify-between">
                                                <div class="flex items-center space-x-2 w-full">                                                    
                                                    <form class="w-full"> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ocena</label>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>0</option>
                                                                    <option>1</option>
                                                                    <option>2</option>
                                                                    <option>3</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Komentar</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <textarea id="message" rows="2" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Write a comment and press enter"></textarea>
                                                            </div><!--end col-->
                                                             <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Fotografija</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-6 xl:col-span-4">
                                                                    <div class="w-full relative p-4"> 
                                                                        <div class="w-full h-56 mx-auto mb-4">
                                                                            <input type="file" class="filepond h-56" name="filepond" accept="image/png, image/jpeg, image/gif" />                                    
                                                                        </div>
                                                                        <div id="uploads-container" class="grid grid-cols-2 gap-2">
                                                                            <input type="file" class="filepond"/>
                                                                            <input type="file" class="filepond"/>
                                                                        </div>
                                                                        <div class="btn-holder col-span-12 text-center mt-5">
                                                                            <button id="add-more-uploads" type="button" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm  rounded-full transition hover:bg-primary-600 border border-primary font-medium">Dodaj još fotografija</button>
                                                                        </div>
                                                                    </div>                               
                                                                </div>
                                                            </div>                                                            
                                                            <div class=" col-start-4 col-end-13  mb-2">
                                                                <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Snimi</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>                                  
                                        </div>
                                    </div>                               
                                </div>
                                <div class="hidden" id="tab-4" role="tabpanel" aria-labelledby="ostale-usluge-tab">
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                    <h4 class="font-medium">Personal Information</h4>
                                                </div><!--end card-header-->
                                                <div class="flex-auto p-4">
                                                    <form> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="First_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">First Name</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9 mb-2">
                                                                <input type="text" id="First_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Rosa" placeholder="First name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Last_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Last Name</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Last_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Dodson" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Company_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Company Name</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Company_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Example Themes" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Contact Phone</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Contact_Phone" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="+1 23456 7890" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Your_Email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your email</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="email" id="Your_Email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="example@example.com" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Website Link</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Contact_Phone" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="https://mannatthemes.com/" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ocena</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>United States</option>
                                                                    <option>Canada</option>
                                                                    <option>France</option>
                                                                    <option>Germany</option>
                                                                </select>
                                                            </div><!--end col-->
                                                            <div class=" col-start-4 col-end-13  mb-2">
                                                                <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Submit</button>
                                                                <button type="submit" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded">Cancel</button>
                                                            </div><!--end col-->
                                                        </div><!--end grid-->
                                                    </form>
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                        <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">    
                                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                    <h4 class="font-medium">Change Password</h4>
                                                </div><!--end card-header-->                
                                                <div class="flex-auto p-4"> 
                                                    <form> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Current_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Current Password</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9 mb-2">
                                                                <input type="password" id="Current_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"  placeholder="Current Password" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="New_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">New Password</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="password" id="New_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"  placeholder="New Password" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Confirm_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Confirm Password</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="password" id="Confirm_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Confirm Password" required>
                                                            </div><!--end col-->                                                        
                                                            <div class=" col-start-4 col-end-13  mb-2">
                                                                <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Chang Password</button>
                                                                <button type="submit" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded">Cancel</button>
                                                            </div><!--end col-->
                                                        </div><!--end grid-->
                                                    </form> 
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mt-4">    
                                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                    <h4 class="font-medium">Other Settings</h4>
                                                </div><!--end card-header-->                
                                                <div class="flex-auto p-4"> 
                                                    <form> 
                                                        <label class="custom-label block mb-2 dark:text-slate-300">
                                                            <div class="bg-white border border-slate-200 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                                                                <input type="checkbox" class="hidden">
                                                                <i class="fas fa-check hidden text-xs text-slate-700 "></i>
                                                            </div>
                                                            Email Notifications <span class="text-slate-400">Do you need them?</span>
                                                        </label>
                                                        <label class="custom-label block dark:text-slate-300">
                                                            <div class="bg-white border border-slate-200 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                                                                <input type="checkbox" class="hidden">
                                                                <i class="fas fa-check hidden text-xs text-slate-700"></i>
                                                            </div>
                                                            API Access <span class="text-slate-400">Enable/Disable access</span> 
                                                        </label>
                                                    </form> 
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col-->                                    
                                    </div><!--end grid-->
                                </div>
                                <div class="hidden" id="tab-5" role="tabpanel" aria-labelledby="korisceni-preparati-tab">
                                    <div class="grid md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
                                        <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">
                                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                    <h4 class="font-medium">Personal Information</h4>
                                                </div><!--end card-header-->
                                                <div class="flex-auto p-4">
                                                    <form> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="First_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">First Name</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9 mb-2">
                                                                <input type="text" id="First_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Rosa" placeholder="First name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Last_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Last Name</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Last_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Dodson" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Company_Name" class="font-medium text-sm text-slate-600 dark:text-slate-400">Company Name</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Company_Name" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="Example Themes" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Contact Phone</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Contact_Phone" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="+1 23456 7890" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Your_Email" class="font-medium text-sm text-slate-600 dark:text-slate-400">Your email</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="email" id="Your_Email" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="example@example.com" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Contact_Phone" class="font-medium text-sm text-slate-600 dark:text-slate-400">Website Link</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="text" id="Contact_Phone" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" value="https://mannatthemes.com/" placeholder="Last name" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="countries" class="font-medium text-sm text-slate-600 dark:text-slate-400">Ocena</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <select id="countries" class=" w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-[6.5px] focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                                    <option>United States</option>
                                                                    <option>Canada</option>
                                                                    <option>France</option>
                                                                    <option>Germany</option>
                                                                </select>
                                                            </div><!--end col-->
                                                            <div class=" col-start-4 col-end-13  mb-2">
                                                                <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Submit</button>
                                                                <button type="submit" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded">Cancel</button>
                                                            </div><!--end col-->
                                                        </div><!--end grid-->
                                                    </form>
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col-->
                                        <div class="col-span-12 md:col-span-12 lg:col-span-12 xl:col-span-12">
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative">    
                                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                    <h4 class="font-medium">Change Password</h4>
                                                </div><!--end card-header-->                
                                                <div class="flex-auto p-4"> 
                                                    <form> 
                                                        <div class="grid md:grid-cols-12 lg:grid-cols-12">
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Current_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Current Password</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9 mb-2">
                                                                <input type="password" id="Current_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"  placeholder="Current Password" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="New_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">New Password</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="password" id="New_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700"  placeholder="New Password" required>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-3 self-center text-right mr-2">
                                                                <label for="Confirm_Password" class="font-medium text-sm text-slate-600 dark:text-slate-400">Confirm Password</label>
                                                            </div><!--end col-->
                                                            <div class="col-span-12 md:col-span-12 lg:col-span-9  mb-2">
                                                                <input type="password" id="Confirm_Password" class="form-input w-full rounded-md mt-1 border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-1 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" placeholder="Confirm Password" required>
                                                            </div><!--end col-->                                                        
                                                            <div class=" col-start-4 col-end-13  mb-2">
                                                                <button type="submit" class="inline-block focus:outline-none text-primary-500 hover:bg-primary-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-primary-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-primary-500  text-sm font-medium py-1 px-3 rounded">Chang Password</button>
                                                                <button type="submit" class="inline-block focus:outline-none text-red-500 hover:bg-red-500 hover:text-white bg-transparent border border-gray-200 dark:bg-transparent dark:text-red-500 dark:hover:text-white dark:border-gray-700 dark:hover:bg-red-500  text-sm font-medium py-1 px-3 rounded">Cancel</button>
                                                            </div><!--end col-->
                                                        </div><!--end grid-->
                                                    </form> 
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                            <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mt-4">    
                                                <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                                                    <h4 class="font-medium">Other Settings</h4>
                                                </div><!--end card-header-->                
                                                <div class="flex-auto p-4"> 
                                                    <form> 
                                                        <label class="custom-label block mb-2 dark:text-slate-300">
                                                            <div class="bg-white border border-slate-200 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                                                                <input type="checkbox" class="hidden">
                                                                <i class="fas fa-check hidden text-xs text-slate-700 "></i>
                                                            </div>
                                                            Email Notifications <span class="text-slate-400">Do you need them?</span>
                                                        </label>
                                                        <label class="custom-label block dark:text-slate-300">
                                                            <div class="bg-white border border-slate-200 rounded w-4 h-4  inline-block leading-4 text-center -mb-[3px]">
                                                                <input type="checkbox" class="hidden">
                                                                <i class="fas fa-check hidden text-xs text-slate-700"></i>
                                                            </div>
                                                            API Access <span class="text-slate-400">Enable/Disable access</span> 
                                                        </label>
                                                    </form> 
                                                </div><!--end card-body-->
                                            </div> <!--end card-->
                                        </div><!--end col-->                                    
                                    </div><!--end grid-->
                                </div>
                            </div>
                        </div>
                    </div> <!--end inner-grid--> 
                </div><!--end col-->   
                <div class="sm:col-span-12  md:col-span-12 lg:col-span-3 xl:col-span-3 ">
                    <div class="bg-white dark:bg-slate-800 shadow  rounded-md w-full relative mb-4">
                        <div class="border-b border-dashed border-slate-200 dark:border-slate-700 py-3 px-4 dark:text-slate-300/70">
                            <h4 class="font-medium">Keep in touch</h4>
                        </div><!--end header-title-->
                        <div class="flex-auto p-4"> 
                            <div class="flex items-center mb-4">
                                <img src="assets/images/users/avatar-2.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                <div class="self-center">                                                
                                    <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Nicolas Wright </a>
                                    <span class="text-slate-500 mr-2 text-[11px]">Team Leader</span>
                                </div>
                            </div>
                            <div class="flex items-center mb-4">
                                <img src="assets/images/users/avatar-4.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                <div class="self-center">                                                
                                    <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Louise Baker </a>
                                    <span class="text-slate-500 mr-2 text-[11px]">Designer</span>
                                </div>
                            </div>
                            <div class="flex items-center mb-4">
                                <img src="assets/images/users/avatar-5.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                <div class="self-center">                                                
                                    <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Thomas Jewell </a>
                                    <span class="text-slate-500 mr-2 text-[11px]">Python Developer</span>
                                </div>
                            </div>
                            <div class="flex items-center mb-4">
                                <img src="assets/images/users/avatar-6.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                <div class="self-center">                                                
                                    <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Betty Jenkins </a>
                                    <span class="text-slate-500 mr-2 text-[11px]">React Developer</span>
                                </div>
                            </div>
                            <div class="flex items-center mb-4">
                                <img src="assets/images/users/avatar-9.png" alt="" class="mr-2 h-9 inline-block rounded-full">
                                <div class="self-center">                                                
                                    <a href="#" class="text-sm font-medium hover:text-primary-500 block text-slate-700 dark:text-gray-400 leading-[8px]">Arthur Mann </a>
                                    <span class="text-slate-500 mr-2 text-[11px]">Tester</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- footer -->
			<?php include('templates/footer.php'); ?>
        </div>
</div>

<!-- <div class="menu-overlay"></div> -->

<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script>
flatpickr(".flatpickr", {
	dateFormat: "d.m.Y.",
});
</script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/libs/filepond/filepond.min.js"></script>
<script src="assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js"></script>
<script src="assets/libs/vanillajs-datepicker/js/datepicker-full.min.js"></script>
<script src="assets/libs/mobius1-selectr/selectr.min.js"></script>
<script src="assets/js/pages/form-advanced.init.js"></script>
<script src="assets/js/app.js"></script>
<script>    
FilePond.registerPlugin(FilePondPluginImagePreview);    
// Get a reference to the file input element
const inputElement = document.querySelectorAll('input[type="file"]');

// Create a FilePond instance
inputElement.forEach(element => {
	const pond = FilePond.create(element);    
});

var elem = document.querySelector('input[name="foo"]');
new Datepicker(elem, {
// ...options
}); 
new Selectr('#sizing',{
	taggable: true,
	tagSeperators: [",", "|"]
});
</script>
<script>
document.getElementById("add-more-uploads").addEventListener("click", function() {
    var container = document.getElementById("uploads-container");
    var inputField = document.createElement("input");
    inputField.setAttribute("type", "file");
    inputField.classList.add("filepond");
    container.appendChild(inputField);

    // Inicijalizacija FilePond-a
    FilePond.parse(document.body);
});
</script>
</body>
</html>