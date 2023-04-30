<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Principal</div>
                    <a class="nav-link" href="{{ route('admin.home.index') }}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>

                    </a>
                    <div class="sb-sidenav-menu-heading">Gerir</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Funcionários
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav">
                            <a class="nav-link" href="{{ route('admin.employer.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.employer.list.index') }}">Listar</a>
                        </nav>
                    </div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseBook" aria-expanded="false" aria-controls="collapseBook">
                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                        Livros
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseBook" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.book.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.book.list.index') }}">Listar</a>
                        </nav>
                    </div>
                <div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseSupplier" aria-expanded="false" aria-controls="collapseSupplier">
                        <div class="sb-nav-link-icon"><i class="fas fa-user"></i></div>
                        Fornecedores
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseSupplier" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.supplier.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.supplier.list.index') }}">Listar</a>
                        </nav>
                    </div>
                </div>
                <div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseCostumer" aria-expanded="false" aria-controls="collapseCostumer">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                        Clientes
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseCostumer" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.costumer.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.costumer.list.index') }}">Listar</a>
                        </nav>
                    </div>
                </div>


                <div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseRole" aria-expanded="false" aria-controls="collapseRole">
                        <div class="sb-nav-link-icon"><i class="fas fa-role"></i></div>
                       Função
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseRole" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.role.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.role.list.index') }}">Listar</a>
                        </nav>
                    </div>
                </div>


                <div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseTipePayments" aria-expanded="false" aria-controls="collapseTipePayments">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                       Tipo de Pagamento
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseTipePayments" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.typePayment.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.typePayment.list.index') }}">Listar</a>
                        </nav>
                    </div>
                </div>



                <div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                        <div class="sb-nav-link-icon"><i class="fas fa-users"></i></div>
                       Livros e Fornecedores
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                            <a class="nav-link" href="{{ route('admin.bookSupplier.create.index') }}">Cadastrar</a>
                            <a class="nav-link" href="{{ route('admin.bookSupplier.list.index') }}">Listar</a>
                        </nav>
                    </div>
                </div>


                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logado como:</div>
                Administrador
            </div>
        </nav>
    </div>
