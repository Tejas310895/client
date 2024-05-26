<div class="page">
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Overview
                        </div>
                        <h2 class="page-title">
                            Orders History
                        </h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-12">
                        <div class="row row-cards">
                            <?php for ($i = 0; $i < 10; $i++) : ?>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card border border-0" style="border-radius: 20px;">
                                        <div class="card-header card-header-light pe-0" style="border-radius: 20px;">
                                            <div class="row align-items-center w-100">
                                                <div class="col-auto">
                                                    <a href="#">
                                                        <span class="avatar" title="Tejas Shirsat">TS</span>
                                                    </a>
                                                </div>
                                                <div class="col text-truncate">
                                                    <a href="#" class="text-reset d-block">Order # PRB17143094550</a>
                                                    <div class="d-block text-secondary text-truncate mt-n1">23 May 2024, 08:36 PM</div>
                                                </div>
                                                <div class="col-auto text-secondary">
                                                    <button class="btn btn-ghost-danger w-100 btn-icon rounded-circle">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-trash-x">
                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                            <path d="M4 7h16" />
                                                            <path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" />
                                                            <path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" />
                                                            <path d="M10 12l4 4m0 -4l-4 4" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="divide-y">
                                                <div>
                                                    <div class="row">
                                                        <div class="col">
                                                            <div class="text-truncate">
                                                                <strong>Xerox</strong>
                                                            </div>
                                                            <div class="mb-2">
                                                                <div class="badge bg-primary"></div>
                                                                Color : <strong>Black & White</strong>
                                                            </div>
                                                            <div class="mb-2">
                                                                <div class="badge bg-primary"></div>
                                                                Paper : <strong>A4 Size</strong>
                                                            </div>
                                                            <div class="col-auto">
                                                                <a href="#" class="link-indigo">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-text">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                        <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                                        <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                                        <path d="M9 9l1 0" />
                                                                        <path d="M9 13l6 0" />
                                                                        <path d="M9 17l6 0" />
                                                                    </svg>
                                                                    10 <small>Pages</small> X 2 Copies
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="col-auto align-self-center">
                                                            <div class="col-auto text-secondary">
                                                                <button class="switch-icon switch-icon-scale active" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button" aria-controls="offcanvasStart">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-printer">
                                                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                        <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                                                        <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                                                        <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <?php if ($i == 3) : ?>
                                                    <div>
                                                        <div class="row">
                                                            <div class="col">
                                                                <div class="text-truncate">
                                                                    <strong>Xerox</strong>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <div class="badge bg-primary"></div>
                                                                    Color : <strong>Black & White</strong>
                                                                </div>
                                                                <div class="mb-2">
                                                                    <div class="badge bg-primary"></div>
                                                                    Paper : <strong>A4 Size</strong>
                                                                </div>
                                                                <div class="col-auto">
                                                                    <a href="#" class="link-indigo">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-file-text">
                                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                            <path d="M14 3v4a1 1 0 0 0 1 1h4" />
                                                                            <path d="M17 21h-10a2 2 0 0 1 -2 -2v-14a2 2 0 0 1 2 -2h7l5 5v11a2 2 0 0 1 -2 2z" />
                                                                            <path d="M9 9l1 0" />
                                                                            <path d="M9 13l6 0" />
                                                                            <path d="M9 17l6 0" />
                                                                        </svg>
                                                                        10 <small>Pages</small> X 2 Copies
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-auto align-self-center">
                                                                <div class="col-auto text-secondary">
                                                                    <button class="switch-icon switch-icon-scale active" data-bs-toggle="offcanvas" href="#offcanvasStart" role="button" aria-controls="offcanvasStart">
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-printer">
                                                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                                                            <path d="M17 17h2a2 2 0 0 0 2 -2v-4a2 2 0 0 0 -2 -2h-14a2 2 0 0 0 -2 2v4a2 2 0 0 0 2 2h2" />
                                                                            <path d="M17 9v-4a2 2 0 0 0 -2 -2h-6a2 2 0 0 0 -2 2v4" />
                                                                            <path d="M7 13m0 2a2 2 0 0 1 2 -2h6a2 2 0 0 1 2 2v4a2 2 0 0 1 -2 2h-6a2 2 0 0 1 -2 -2z" />
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endif ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php endfor ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="offcanvas offcanvas-start w-100" tabindex="-1" id="offcanvasStart" aria-labelledby="offcanvasStartLabel">
    <div class="offcanvas-header border border-bottom-0">
        <h2 class="offcanvas-title" id="offcanvasStartLabel">Order # PRB17143094550</h2>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
        <iframe src="https://admin.printbizz.in/writable/uploads/20240501/1714589422_ec47a3c6ede44c406349.pdf" width="100%" height="99%" scrolling="no"></iframe>
        <!-- <embed src="https://admin.printbizz.in/writable/uploads/20240501/1714589422_ec47a3c6ede44c406349.pdf" id="new1" onclick="PrintElem(this.id)" style="width: 100%; height:99%;"> -->
    </div>
</div>
<script>
    function PrintElem(elem) {
        var mywindow = window.open('', 'PRINT', 'height=400,width=600');
        mywindow.document.write('<img src="' + document.getElementById(elem).src + '" width="95%">');

        mywindow.document.close(); // necessary for IE >= 10
        mywindow.focus(); // necessary for IE >= 10*/

        mywindow.print();
        mywindow.close();

        return true;
    }
</script>