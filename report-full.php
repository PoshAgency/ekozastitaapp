<!DOCTYPE html>
<html lang="en" class="scroll-smooth group" data-sidebar="brand" dir="ltr">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

<?php include('templates/head.php'); ?>

<link rel="stylesheet" href="assets/css/custom.css" />
</head>

<body data-layout-mode="light" data-sidebar-size="default" data-theme-layout="vertical" class="report-full-page bg-[#EEF0FC] dark:bg-gray-900">

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
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="xl:w-full min-h-[calc(100vh-138px)] relative pb-14"> 
			<div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-4 xl:col-span-3">
					<div class="">
						<div class="text-center">
							<img src="assets/images/client-01.jpg" alt="Logo" class="mx-auto inline-block">
							<div class="my-4">                                                                        
								<h5 class="text-xxl font-semibold text-slate-700 dark:text-gray-400">Delhaize Serbia d.o.o.tech</h5>
								<!-- <span class="block font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
							</div>
						</div>
						<div class="grid grid-cols-12 sm:grid-cols-12 md:grid-cols-12 lg:grid-cols-12 xl:grid-cols-12 gap-4">
							<div class="col-span-12 sm:col-span-12 md:col-span-5 text-end">
								<span class="dark:text-slate-300">Objekat:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400">Maxi 744</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5 text-end">
								<span class="dark:text-slate-300">Adresa:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400">Bulevar Vudroa Vilsona 8</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5 text-end">
								<span class="dark:text-slate-300">Grad:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400">Beograd</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5 text-end">
								<span class="dark:text-slate-300">Broj Izveštaja:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400">5144</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5 text-end">
								<span class="dark:text-slate-300">Datum:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400">10.01.2024.</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-5 text-end">
								<span class="dark:text-slate-300">Izvršilac:</span>
							</div>
							<div class="col-span-12 sm:col-span-12 md:col-span-7">
								<span class="dark:text-slate-400">Marko Marković</span>
							</div>
						</div>
						<div class="border-b border-dashed dark:border-slate-700/40 my-3 group-data-[sidebar=dark]:border-slate-700/40 group-data-[sidebar=brand]:border-slate-700/40"></div>
						<div class="col-span-12 sm:col-span-12 md:col-span-12 text-center mb-5 gap-3 flex align-center justify-center">
							<a href="report-full-edit.php" class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white">
								<i class="ti ti-plus me-1"></i>
								Izmeni
							</a>
							<a href="javascript:;" class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white">
								<i class="ti ti-plus me-1"></i>
								Pošalji
							</a>
							<a href="javascript:;" class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white">
								<i class="ti ti-plus me-1"></i>
								Snimi PDF
							</a>
						</div>	
					</div>
				</div>
				<div class="col-span-12 sm:col-span-12 md:col-span-12 lg:col-span-8 xl:col-span-9">
					<div class="grid  grid-cols-1 sm:grid-cols-4 md:grid-cols-4 lg:grid-cols-4 xl:grid-cols-4 gap-4 p-4">
						<div class="bg-primary-500/5 dark:bg-primary-500/10 border border-dashed border-primary-500  rounded-md w-full relative ">                                
							<div class="flex-auto p-4 text-center">                                       
								<span class="inline-flex  justify-center items-center h-14 w-14 rounded-full bg-white dark:bg-gray-900 border border-dashed border-primary-500">
									<i data-lucide="book" class="stroke-primary-500 text-3xl"></i>
								</span>
								<h4 class="my-1 font-semibold text-3xl dark:text-slate-200">10</h4>
								<h6 class="text-gray-800 dark:text-gray-400 mb-0 text-lg font-medium uppercase">Deratizacione kutije</h6>
								<!-- <p class="truncate text-gray-700 dark:text-slate-500 text-sm font-normal">
									<span class="text-green-500">
										<i class="mdi mdi-checkbox-marked-circle-outline me-1"></i>
									</span>
									<a href="location-full-edit.php" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm rounded-full transition hover:bg-primary-600 border border-primary font-medium mb-2 inline-block">Dodaj novi</a>
								</p> -->
							</div>
						</div>
						<div class="bg-pink-500/5 dark:bg-pink-500/10 border border-dashed border-orange-500  rounded-md w-full relative ">                                
							<div class="flex-auto p-4 text-center">								
								<span class="inline-flex  justify-center items-center h-14 w-14 rounded-full bg-white dark:bg-gray-900 border border-dashed border-orange-500">
									<i data-lucide="book" class="stroke-orange-500 text-3xl"></i>
								</span>
								<h4 class="my-1 font-semibold text-3xl dark:text-slate-200">0</h4>
								<h6 class="text-gray-800 dark:text-gray-400 text-lg mb-0 font-medium uppercase">Zamke sa lepkom</h6>
								<!-- <p class="truncate text-gray-700 dark:text-slate-500 text-sm font-normal">
									<a href="work-order-full-edit.php" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm rounded-full transition hover:bg-primary-600 border border-primary font-medium mb-2 inline-block">Dodaj novi</a>
								</p> -->
							</div>
						</div>
						<div class="bg-purple-500/5 dark:bg-cyan-500/5 border border-dashed border-purple-500  rounded-md w-full relative ">                                
							<div class="flex-auto p-4 text-center">								
								<span class="inline-flex  justify-center items-center h-14 w-14 rounded-full bg-white dark:bg-gray-900 border border-dashed border-purple-600">
									<i data-lucide="book" class="stroke-purple-500 text-3xl"></i>
								</span>
								<h4 class="my-1 font-semibold text-3xl dark:text-slate-200">5</h4>
								<h6 class="text-gray-800 dark:text-gray-400 mb-0 text-lg font-medium uppercase">Insekt lampe</h6>
								<!-- <p class="truncate text-gray-700 dark:text-slate-500 text-sm font-normal">
									<a href="user-full-edit.php" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm rounded-full transition hover:bg-primary-600 border border-primary font-medium mb-2 inline-block">Dodaj novi</a>
								</p> -->
							</div>
						</div>
						<div class="bg-pink-500/5 dark:bg-orange-500/5 border border-dashed border-purple-500  rounded-md w-full relative ">                                
							<div class="flex-auto p-4 text-center">								
								<span class="inline-flex  justify-center items-center h-14 w-14 rounded-full bg-white dark:bg-gray-900 border border-dashed border-purple-600">
									<i data-lucide="book" class="stroke-purple-500 text-3xl"></i>
								</span>
								<h4 class="my-1 font-semibold text-3xl dark:text-slate-200">5</h4>
								<h6 class="text-gray-800 dark:text-gray-400 mb-0 text-lg font-medium uppercase">Insekt lampe</h6>
								<!-- <p class="truncate text-gray-700 dark:text-slate-500 text-sm font-normal">
									<a href="user-full-edit.php" class="px-2 py-1 lg:px-4 bg-primary text-white text-sm rounded-full transition hover:bg-primary-600 border border-primary font-medium mb-2 inline-block">Dodaj novi</a>
								</p> -->
							</div>
						</div>
					</div>
					<div class="w-full relative mb-4">  
						<div class="flex-auto p-0 md:p-4">
							<div class="mb-4 border-b border-gray-200 dark:border-slate-700" data-fc-type="tab">
								<ul class="flex flex-wrap -mb-px text-sm font-medium text-center" aria-label="Tabs">
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 active " id="orders-tab" data-fc-target="#orders" type="button" role="tab" aria-controls="orders" aria-selected="false">Deratizacija</button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="wishlist-tab" data-fc-target="#wishlist" type="button" role="tab" aria-controls="wishlist" aria-selected="false">Dezinfekcija</button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ratings-tab" data-fc-target="#ratings" type="button" role="tab" aria-controls="ratings" aria-selected="false">Dezinsekcija</button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ratings-tab" data-fc-target="#ratings" type="button" role="tab" aria-controls="ratings" aria-selected="false">Ostale usluge</button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ratings-tab" data-fc-target="#ratings" type="button" role="tab" aria-controls="ratings" aria-selected="false">Korišćeni preparati</button>
									</li>
								</ul>
							</div>
							
							<div id="myTabContent">
								<div class="active  p-4 bg-gray-50 rounded-lg dark:bg-gray-700/20" id="orders" role="tabpanel" aria-labelledby="orders-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="flex flex-wrap gap-4 mb-3">
											<div class="ms-auto">
												<form>
													<div class="relative">
														<div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
															<i data-lucide="search" class="z-[1] w-5 h-5 stroke-slate-400"></i>
														</div>
														<input type="search" id="productSearch" class="form-input w-52 rounded-md mt-1 border border-slate-600 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none placeholder:text-slate-400 placeholder:font-normal placeholder:text-sm placeholder:text-gray-500 dark:focus:border-primary-500 dark:hover:border-slate-700 pl-10 p-2.5 text-gray-500" placeholder="Pretraži">
													</div>
												</form>
											</div>
											<!-- <div>
												<a href="client-full-edit.php" class="inline-block focus:outline-none bg-brand-500 mt-1 text-white hover:bg-brand-600 hover:text-white  text-md font-medium py-2 px-4 rounded">
													Dodaj klijenta
												</a>
											</div> -->
										</div>
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
												<table class="w-full">
													<thead class="bg-gray-50 dark:bg-gray-700/20">
														<tr>
															<th scope="col" class="p-3">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i title="Izaberi sve" class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Naziv objekta
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Adresa
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Telefon
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Datum poslednje izmene
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Izveštaj
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Akcija
															</th>
														</tr>
													</thead>
													<tbody>
														<!-- 1 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">CMK 870 Kijevo</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>                                                                    
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!-- 2 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Nicolas Wright</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!-- 3 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Luna Winston</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!-- 4 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Alejandro Ruiz</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--5-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Jesus Oates</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--6-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Glenn Rogers</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--7-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">April Boyce</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--8-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Maria Johnson</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--9-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Anna Ruiz</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--10-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Lisa Henriquez</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">Jurija Gagarina 14</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																+1 123 456789
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																30.11.2021.
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																892
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a class="mr-3" href="location-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a class="mr-3" href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="flex justify-between mt-4">
										<div class="self-center">
											<p class="dark:text-slate-400">Strana 1 - 20 of 1,524</p>
										</div>
										<div class="self-center">
											<ul class="inline-flex items-center -space-x-px">
												<li>
													<a href="#" class=" py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
														<i class="icofont-simple-left"></i>
													</a>
												</li>
												<li>
												<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
												</li>
												<li>
												<a href="#" aria-current="page" class="z-10 py-2 px-3 leading-tight text-brand-600 bg-brand-50 border border-brand-300 hover:bg-brand-100 hover:text-brand-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">2</a>
												</li>
												<li>
													<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
												</li>
												<li>
												<a href="#" class=" py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
													<i class="icofont-simple-right"></i>
												</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="wishlist" role="tabpanel" aria-labelledby="wishlist-tab">
									<div class="flex flex-wrap gap-4 mb-3">
										<div class="mb-2 w-44 select-bg-gray">  
											<select id="default" class="form-input w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
												<option>Objekti</option>
												<option>Smederevo</option>
												<option>Beograd</option>
												<option>Požarevac</option>
											</select>
										</div>
										<div class="mb-2 w-44">                                           
											<select id="Category" class="w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
												<option  class="dark:text-slate-700">Tip naloga</option>
                                                <option  class="dark:text-slate-700">redovni</option>
                                                <option  class="dark:text-slate-700">vanredni</option>
                                            </select> 
                                        </div>
                                        <div class="mb-2 w-36">
											<select id="Vendor" class="w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700">
                                                <option  class="dark:text-slate-700">Operativac</option>
                                                <option  class="dark:text-slate-700">Marko Marković</option>
                                                <option  class="dark:text-slate-700">Dragan Draganovoić</option>
                                            </select> 
                                        </div>
										<div class="mb-2"> 
											<input id="date" name="date" class="flatpickr form-input w-full rounded-md border border-slate-300/60 dark:border-slate-700 dark:text-slate-300 bg-transparent px-3 py-2 focus:outline-none focus:ring-0 placeholder:text-slate-400/70 placeholder:font-normal placeholder:text-sm hover:border-slate-400 focus:border-primary-500 dark:focus:border-primary-500  dark:hover:border-slate-700" type="text" placeholder="Select Date.." readonly="readonly">
										</div>
                                    </div>
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
												<table class="w-full">
													<thead class="bg-gray-50 dark:bg-gray-700/20">
														<tr>
															<th scope="col" class="p-3">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i title="Izaberi sve" class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Broj naloga
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Objekat
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Tip naloga
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Operativac
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Datum
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Akcija
															</th>
														</tr>
													</thead>
													<tbody>
														<!-- 1 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div  class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0001/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Smederevo
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																redovni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>                                                                    
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!-- 2 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0002/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
															</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Beograd
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																vanredni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!-- 3 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0003/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Smederevo
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																redovni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!-- 4 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0004/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Beograd
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																redovni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--5-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0005/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Smederevo
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																redovni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--6-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0006/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Beograd
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																redovni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--7-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0007/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Smederevo
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																redovni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--8-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0008/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Smederevo
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																redovni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--9-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0009/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Smederevo
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																redovni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--10-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<div class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">0010/2024</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</div>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Smederevo
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																vanredni
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																Marko Marković
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<span class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">23.02.2024.</span>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="work-order-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="flex justify-between">
										<div class="self-center">
											<p class="dark:text-slate-400">Strana  1 - 20 of 1,524</p>
										</div>
										<div class="self-center">
											<ul class="inline-flex items-center -space-x-px">
												<li>
													<a href="#" class=" py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
														<i class="icofont-simple-left"></i>
													</a>
												</li>
												<li>
												<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
												</li>
												<li>
												<a href="#" aria-current="page" class="z-10 py-2 px-3 leading-tight text-brand-600 bg-brand-50 border border-brand-300 hover:bg-brand-100 hover:text-brand-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">2</a>
												</li>
												<li>
													<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
												</li>
												<li>
												<a href="#" class=" py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
													<i class="icofont-simple-right"></i>
												</a>
												</li>
											</ul>
										</div>
									</div>
								</div>
								<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="ratings" role="tabpanel" aria-labelledby="ratings-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
												<table class="w-full">
													<thead class="bg-gray-50 dark:bg-gray-700/20">
														<tr>
															<th scope="col" class="p-3">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i title="Izaberi sve" class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Ime i prezime
															</th>
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Email
															</th>															
															<th scope="col" class="p-3 text-xs font-medium tracking-wider text-left text-gray-700 dark:text-gray-400 uppercase">
																Akcija
															</th>
														</tr>
													</thead>
													<tbody>
														<!-- 1 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Marko Marković</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!-- 2 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Nicolas Wright</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!-- 3 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Luna Winston</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!-- 4 -->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Alejandro Ruiz</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--5-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Jesus Oates</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--6-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Glenn Rogers</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--7-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">April Boyce</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--8-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Maria Johnson</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--9-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Anna Ruiz</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
														<!--10-->
														<tr class="bg-white border-b border-dashed dark:bg-gray-900 dark:border-gray-700/40">
															<td class="w-4 p-4">
																<label class="custom-label">
																	<div class="bg-white dark:bg-slate-600/40 border border-slate-200 dark:border-slate-600 rounded w-5 h-5  inline-block  text-center -mb-[5px]">
																	<input type="checkbox" class="hidden" >
																	<i class="icofont-verification-check hidden text-ms text-brand-500 dark:text-slate-200 leading-5"></i>
																	</div>
																</label>
															</td>
															<td class="p-3 text-sm font-medium whitespace-nowrap dark:text-white">
																<a href="user-full.php" class="flex items-center">
																	<!-- <img src="assets/images/client-01.jpg" alt="" class="me-2 h-8 inline-block"> -->
																	<div class="self-center">                                                                        
																		<h5 class="text-sm font-semibold text-slate-700 dark:text-gray-400">Lisa Henriquez</h5>
																		<!-- <span class="block  font-medium text-slate-500">maloprodajni lanac prodavnica</span> -->
																	</div>
																</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="mailto:exemple@gmail.com">exemple@gmail.com</a>
															</td>
															<td class="p-3 text-sm text-gray-500 whitespace-nowrap dark:text-gray-400">
																<a href="user-full-edit.php"><i class="icofont-ui-edit text-xxl text-gray-500 dark:text-gray-400"></i></a>
																<a href="javascript:;"><i class="icofont-ui-delete text-xxl text-red-500 dark:text-red-400" data-fc-type="modal" data-fc-target="smallmodal"></i></a>
															</td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
									<div class="flex justify-between">
										<div class="self-center">
											<p class="dark:text-slate-400">Strana 1 - 20 of 1,524</p>
										</div>
										<div class="self-center">
											<ul class="inline-flex items-center -space-x-px">
												<li>
													<a href="#" class=" py-2 px-3 ms-0 leading-tight text-gray-500 bg-white rounded-l-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
														<i class="icofont-simple-left"></i>
													</a>
												</li>
												<li>
												<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">1</a>
												</li>
												<li>
												<a href="#" aria-current="page" class="z-10 py-2 px-3 leading-tight text-brand-600 bg-brand-50 border border-brand-300 hover:bg-brand-100 hover:text-brand-700 dark:border-gray-700 dark:bg-gray-700 dark:text-white">2</a>
												</li>
												<li>
													<a href="#" class="py-2 px-3 leading-tight text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">3</a>
												</li>
												<li>
												<a href="#" class=" py-2 px-3 leading-tight text-gray-500 bg-white rounded-r-lg border border-gray-300 hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-900 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
													<i class="icofont-simple-right"></i>
												</a>
												</li>
											</ul>
										</div>
									</div>
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
</div>

<!-- <div class="menu-overlay"></div> -->

<script src="assets/libs/lucide/umd/lucide.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/flatpickr/flatpickr.min.js"></script>
<script src="assets/libs/@frostui/tailwindcss/frostui.js"></script>

<script src="assets/js/app.js"></script>
</body>
</html>