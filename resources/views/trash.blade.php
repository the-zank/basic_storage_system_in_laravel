@extends('layouts.app')

@section('container')

<div class="content-page">
    <div class="container-fluid">

        <div class="icon icon-grid i-grid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card card-block card-stretch  card-transparent">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                                <h4 class="card-title">Images</h4>
                            </div>
                            <div class="d-flex align-items-center">
                            
                                <div class="list-grid-toggle mr-4">
                                    <span class="icon icon-grid i-grid"><i class="ri-layout-grid-line font-size-20"></i></span>
                                    <span class="icon icon-grid i-list"><i class="ri-list-check font-size-20"></i></span>
                                    <span class="label label-list">List</span>
                                </div>
                                <div class="mr-4">
                                    <a href="#" class="btn btn-primary view-more">Delete</a>
                                </div>
                                <div class="dashboard1-dropdown d-flex align-items-center">
                                    <div class="dashboard1-info">
                                        <a href="#calander" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
                                        <ul id="calander" class="iq-dropdown collapse list-inline m-0 p-0 mt-2">
                                            <li class="mb-2">
                                                <a href="#" data-toggle="tooltip" data-placement="right" title="Calander"><i
                                                        class="las la-calendar iq-arrow-left"></i></a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" data-toggle="tooltip" data-placement="right" title="Keep"><i
                                                        class="las la-lightbulb iq-arrow-left"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="tooltip" data-placement="right" title="Tasks"><i
                                                        class="las la-tasks iq-arrow-left"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb ">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <a class="image-popup-vertical-fit" href="../assets/images/layouts/page-5/01.png">
                                    <img src="../assets/images/layouts/page-5/01.png" class="img-fluid" alt="images" />  
                                    <div class="iq-image-overlay"></div>
                                </a>           
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6>Cone.jpeg</h6> 
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton001" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton001">
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-restart-line mr-2"></i>restore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>       
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <a class="image-popup-vertical-fit" href="../assets/images/layouts/page-5/02.png">
                                    <img src="../assets/images/layouts/page-5/02.png" class="img-fluid" alt="images" />  
                                    <div class="iq-image-overlay"></div>
                                </a>           
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6>Circlecylinder.png</h6> 
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton002" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton002">
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-restart-line mr-2"></i>restore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>           
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <a class="image-popup-vertical-fit" href="../assets/images/layouts/page-5/03.png">
                                    <img src="../assets/images/layouts/page-5/03.png" class="img-fluid" alt="images" />  
                                    <div class="iq-image-overlay"></div>
                                </a>           
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6>Circlecylinder.svg</h6>  
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton003" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton003">
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-restart-line mr-2"></i>restore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>      
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <a class="image-popup-vertical-fit" href="../assets/images/layouts/page-5/04.png">
                                    <img src="../assets/images/layouts/page-5/04.png" class="img-fluid" alt="images" />  
                                    <div class="iq-image-overlay"></div>
                                    <div class="overlay-img-icon">
                                        <i class="las la-play-circle"></i>
                                    </div> 
                                </a>           
                            </div>
                            <div class="d-flex justify-content-between">                                    
                                <h6>Oval.mp4</h6>  
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton04" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton04">
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-restart-line mr-2"></i>restore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>           
                        </div>
                    </div>
                </div>              
                <div class="col-lg-12">
                    <div class="card card-block card-stretch  card-transparent">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                                <h4 class="card-title">Documents</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <a href="#" data-load-file="file" data-title="Chat.pdf" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal"><img src="../assets/images/layouts/page-5/pdf.png" class="img-fluid" alt="image1"></a>         
                            </div>
                            <div class="d-flex justify-content-between">   
                                <h6>Chat.pdf</h6>     
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton05" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton05">
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-restart-line mr-2"></i>restore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>         
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <a href="#" data-title="Buglist.docx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal"><img src="../assets/images/layouts/page-5/doc.png" class="img-fluid" alt="image1"></a>
                            </div>
                            <div class="d-flex justify-content-between"> 
                                <h6>Buglist.docx</h6>  
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton06" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton06">
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-restart-line mr-2"></i>restore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>     
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <a href="#" data-title="Budget.xlsx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.xlsx" data-toggle="modal" data-target="#exampleModal"><img src="../assets/images/layouts/page-5/xlsx.png" class="img-fluid" alt="image1"></a>
                            </div>
                            <div class="d-flex justify-content-between"> 
                                <h6>Budget.xlsx</h6>
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton07" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton07">
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-restart-line mr-2"></i>restore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body image-thumb">
                            <div class="mb-4 text-center p-3 rounded iq-thumb">
                                <div class="iq-image-overlay"></div>
                                <a href="#" data-title="Untitled.pptx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pptx" data-toggle="modal" data-target="#exampleModal"><img src="../assets/images/layouts/page-5/ppt.png" class="img-fluid" alt="image1"></a>           
                            </div>
                            <div class="d-flex justify-content-between"> 
                                <h6>Untitled.pptx</h6> 
                                <div class="card-header-toolbar">
                                    <div class="dropdown">
                                        <span class="dropdown-toggle" id="dropdownMenuButton08" data-toggle="dropdown">
                                            <i class="ri-more-2-fill"></i>
                                        </span>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton08">
                                            <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                            <a class="dropdown-item" href="#"><i class="ri-restart-line mr-2"></i>restore</a>
                                        </div>
                                    </div>
                                </div>
                            </div>          
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="icon icon-grid i-list">
            <div class="row">
                <div class="col-lg-12">                        
                    <div class="card card-block card-stretch card-transparent">
                        <div class="card-header d-flex justify-content-between pb-0">
                            <div class="header-title">
                                <h4 class="card-title">list View</h4>
                            </div>
                            <div class="d-flex align-items-center">
                            
                                <div class="list-grid-toggle mr-4">
                                    <span class="icon icon-grid i-grid"><i class="ri-layout-grid-line font-size-20"></i></span>
                                    <span class="icon icon-grid i-list"><i class="ri-list-check font-size-20"></i></span>
                                    <span class="label label-list">List</span>
                                </div>
                                <div class="mr-4">
                                    <a href="#" class="btn btn-primary view-more">Delete</a>
                                </div>
                                <div class="dashboard1-dropdown d-flex align-items-center">
                                    <div class="dashboard1-info">
                                        <a href="#calander1" class="collapsed" data-toggle="collapse" aria-expanded="false">
                                            <i class="ri-arrow-down-s-line"></i>
                                        </a>
                                        <ul id="calander1" class="iq-dropdown collapse list-inline m-0 p-0 mt-2">
                                            <li class="mb-2">
                                                <a href="#" data-toggle="tooltip" data-placement="right" title="Calander1"><i
                                                        class="las la-calendar iq-arrow-left"></i></a>
                                            </li>
                                            <li class="mb-2">
                                                <a href="#" data-toggle="tooltip" data-placement="right" title="Keep"><i
                                                        class="las la-lightbulb iq-arrow-left"></i></a>
                                            </li>
                                            <li>
                                                <a href="#" data-toggle="tooltip" data-placement="right" title="Tasks"><i
                                                        class="las la-tasks iq-arrow-left"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="card card-block card-stretch card-height">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table mb-0 table-borderless tbl-server-info">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Owner</th>
                                        <th scope="col">Last Edit</th>
                                        <th scope="col">File Size</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#"><img src="../assets/images/layouts/page-5/01.png" class="img-fluid avatar-30" alt="image1"></a>
                                                </div>
                                                Cone.jpeg
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>jan 21, 2020 me</td>
                                        <td>02 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton6" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton6">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#"><img src="../assets/images/layouts/page-5/02.png" class="img-fluid avatar-30" alt="image1"></a>
                                                </div>
                                                Circlecylinder.png
                                            </div>
                                        </td>
                                        <td>Poul Molive</td>
                                        <td>jan 25, 2020 Poul Molive</td>
                                        <td>64 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton7" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton7">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#"><img src="../assets/images/layouts/page-5/03.png" class="img-fluid avatar-30" alt="image1"></a>
                                                </div>
                                                LongCylinder.svg
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 30, 2020 Gail Forcewind</td>
                                        <td>30 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton8" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton8">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#"><img src="../assets/images/layouts/page-5/04.png" class="img-fluid avatar-30" alt="image1"></a>
                                                </div>
                                                Oval.mp4
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 30, 2020 Gail Forcewind</td>
                                        <td>10 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton9" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton9">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#"><img src="../assets/images/layouts/page-4/pdf.png" class="img-fluid avatar-30" alt="image1"></a>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.pdf" data-toggle="modal" data-target="#exampleModal" data-title="alexa5.pdf" style="cursor: pointer;">Alexa5.pdf</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Mar 30, 2020 Gail Forcewind</td>
                                        <td>10 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton10" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton10">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#"><img src="../assets/images/layouts/page-4/doc.png" class="img-fluid avatar-30" alt="image1"></a>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal" data-title="alexa6.docx" style="cursor: pointer;">Alexa6.docx</div>
                                            </div>
                                        </td>
                                        <td>Penny</td>
                                        <td>Mar 31, 2020 Penny</td>
                                        <td>65 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton11" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton11">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#"><img src="../assets/images/layouts/page-4/xlsx.png" class="img-fluid avatar-30" alt="image1"></a>
                                                </div>
                                                <div data-title="Alexa8.xlsx" data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.xlsx" data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">Alexa8.xlsx</div>
                                            </div>
                                        </td>
                                        <td>Banny</td>
                                        <td>Mar 30, 2020 Banny</td>
                                        <td>90 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton13" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton13">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <div class="mr-3">
                                                    <a href="#"><img src="../assets/images/layouts/page-4/ppt.png" class="img-fluid avatar-30" alt="image1"></a>
                                                </div>
                                                <div data-load-file="file" data-load-target="#resolte-contaniner" data-url="../assets/vendor/doc-viewer/files/demo.docx" data-toggle="modal" data-target="#exampleModal" data-title="alexa7.pptx" style="cursor: pointer;">Alexa7.pptx</div>
                                            </div>
                                        </td>
                                        <td>Me</td>
                                        <td>Apr 04, 2020 me</td>
                                        <td>10 MB</td>
                                        <td>
                                            <div class="dropdown">
                                                <span class="dropdown-toggle" id="dropdownMenuButton12" data-toggle="dropdown">
                                                    <i class="ri-more-fill"></i>
                                                </span>
                                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton12">
                                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection