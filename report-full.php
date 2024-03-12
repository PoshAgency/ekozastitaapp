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
							<a href="javascript:;" class="px-2 py-1 bg-primary-500/10 border border-transparent collapse:bg-green-100 text-primary text-sm rounded hover:bg-blue-600 hover:text-white">
								<i class="ti ti-plus me-1"></i>
								Odobri izveštaj
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
										<button class="inline-block p-4 rounded-t-lg border-b-2 active" id="deratizacija-tab" data-fc-target="#tab-1" type="button" role="tab" aria-controls="tab-1" aria-selected="false">Deratizacija</button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dezinfekcija-tab" data-fc-target="#tab-2" type="button" role="tab" aria-controls="tab-2" aria-selected="false">Dezinfekcija</button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="dezinsekcija-tab" data-fc-target="#tab-3" type="button" role="tab" aria-controls="dezinsekcija" aria-selected="false">Dezinsekcija</button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="ostale-usluge-tab" data-fc-target="#tab-4" type="button" role="tab" aria-controls="ostale-usluge" aria-selected="false">Ostale usluge</button>
									</li>
									<li class="me-2" role="presentation">
										<button class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="korisceni-preparati-tab" data-fc-target="#tab-5" type="button" role="tab" aria-controls="korisceni-preparati" aria-selected="false">Korišćeni preparati</button>
									</li>
								</ul>
							</div>
							
							<div id="myTabContent">
								<div class="active p-4 bg-gray-50 rounded-lg dark:bg-gray-700/20" id="tab-5" role="tabpanel" aria-labelledby="deratizacija-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">							
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
											</div>
										</div>
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
											</div>
										</div>
									</div>								
								</div>
								<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="tab-5" role="tabpanel" aria-labelledby="dezinfekcija-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
												<div class="grid grid-cols-1 p-0 md:p-4">							
													<div class="sm:-mx-6 lg:-mx-8">
														<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
														</div>
													</div>
													<div class="sm:-mx-6 lg:-mx-8">
														<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>
								</div>
								<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="tab-5" role="tabpanel" aria-labelledby="dezinsekcija-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
												<div class="grid grid-cols-1 p-0 md:p-4">							
													<div class="sm:-mx-6 lg:-mx-8">
														<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
														</div>
													</div>
													<div class="sm:-mx-6 lg:-mx-8">
														<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>									
								</div> 
								<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="tab-5" role="tabpanel" aria-labelledby="ostale-usluge-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
												<div class="grid grid-cols-1 p-0 md:p-4">							
													<div class="sm:-mx-6 lg:-mx-8">
														<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
														</div>
													</div>
													<div class="sm:-mx-6 lg:-mx-8">
														<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
														</div>
													</div>
												</div>	
											</div>
										</div>
									</div>									
								</div>  
								<div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="tab-5" role="tabpanel" aria-labelledby="korisceni-preparati-tab">
									<div class="grid grid-cols-1 p-0 md:p-4">
										<div class="sm:-mx-6 lg:-mx-8">
											<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
												<div class="grid grid-cols-1 p-0 md:p-4">							
													<div class="sm:-mx-6 lg:-mx-8">
														<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
														</div>
													</div>
													<div class="sm:-mx-6 lg:-mx-8">
														<div class="relative overflow-x-auto block w-full sm:px-6 lg:px-8">
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
														</div>
													</div>
												</div>	
											</div>
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