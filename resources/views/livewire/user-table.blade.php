    <div>
            <div class="loading-overlay" wire:loading.delay.longest>
                <div class="loading-bar">Carregando</div>
            </div>
        <div class="appointments-list">
            <div class="view-controls">
                <div class="date-controls">
                    <div class="date">
                        <div class="today">Hoje :<input type="date" id="today" name="today" disabled></div>
                    </div>
                </div>
                <div class="actions">
                    <div class="button1">

                        <div class="dataTables_length" id="dataTables_length">
                            <label class="provider">Mostrar
                                <select name="perPage" wire:model="perPage" wire:change="resetPage">
                                    <option value="10">10</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="100">100</option>
                                </select>
                                registos</label>
                        </div>
                    </div>
                    <div class="button3" wire:click="openNewClientModal" wire:loading.attr="disabled">
                        <div class="provider"><i class="fa-solid fa-plus"></i> Cliente Novo</div>
                    </div>
                </div>
            </div>
            @if ($showNewClientModal)
                <div class="modal-wrapper">
                    <div class="modal">
                        <div class="modal-content" id="new-client-form">
                            <span class="close" wire:click="closeNewClientModal">&times;</span>
                            <form wire:submit.prevent="createNewClient">
                                <div class="cliente"><i class="fa-solid fa-user"></i></div>
                                <div class="campo-text">
                                    <label for="newClient">Cliente:</label>
                                    <input type="text" id="newClient" wire:model="newClient">
                                </div>
                                <div class="campo-text">
                                    <label for="newService">Serviço:</label>
                                    <input type="text" id="newService" wire:model="newService">
                                </div>
                                <div class="campo-text">
                                    <label for="newStartDate">Data Inicial:</label>
                                    <input type="date" id="newStartDate" wire:model="newStartDate">
                                </div>
                                <div class="campo-text">
                                    <label for="newEndDate">Data Final:</label>
                                    <input type="date" id="newEndDate" wire:model="newEndDate">
                                </div>
                                <button class="button3" type="submit">Criar</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endif
            <div class="accordion">
                <div class="accordion-item">
                    <div class="accordion-item-header">
                        Filtros
                    </div>
                    <div class="accordion-item-body">
                        <div class="accordion-item-body-content">
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Selecione o Cliente</label>
                                        <select name="selectTechnical" id="selectTechnical" class="form-control"
                                            wire:model="technical">
                                            <option value="">Todos</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Selecione o Serviço</label>
                                        <select name="selectTechnical" id="selectTechnical" class="form-control"
                                            wire:model="technical">
                                            <option value="">Todos</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Data Inicial</label>
                                        <input type="date" id="newStartDate" wire:model="">
                                    </div>
                                </div>
                                <div class="col-3">
                                    <div class="form-group">
                                        <label>Data Final</label>
                                        <input type="date" id="newStartDate" wire:model="">
                                    </div>
                                </div>
                            </div>
                            <button type="button" id="clearFilter" wire:click="" class="button3">Limpar
                                Filtro</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table">
                <div class="appointment">
                    <div class="cell">
                        <div class="text7">Clientes</div>
                    </div>
                    <div class="cell1">
                        <div class="text7">Serviços</div>
                        <img class="iconsort-ascending1" alt="" src="./public/iconsortascending.svg" />
                    </div>
                    <div class="cell1">
                        <div class="text7">Data Inicial</div>
                        <img class="iconsort-ascending1" alt="" src="./public/iconsortascending.svg" />
                    </div>
                    <div class="cell1">
                        <div class="text7">Data Final</div>
                        <img class="iconsort-ascending1" alt="" src="./public/iconsortascending.svg" />
                    </div>
                </div>
                @foreach ($clientes as $cliente)
                    <div class="appointment1" data-date="{{ $cliente->data_inicio }}">
                        <div class="cell5">
                            <div class="text12">{{ $cliente->cliente }}</div>
                        </div>
                        <div class="cell5">
                            <div class="text12">{{ $cliente->servico }}</div>
                        </div>
                        <div class="cell5">
                            <div class="text12">{{ $cliente->data_inicio }}</div>
                        </div>
                        <div class="cell5">
                            <div class="text12">{{ $cliente->data_final }}</div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
        <!-- Paginação -->
        {{ $clientes->links('livewire.setup.pagination') }}

    </div>

    <script>
        // Obtém a referência do elemento input
        var todayInput = document.getElementById('today');

        // Obtém a data atual no formato YYYY-MM-DD
        var todayDate = new Date().toISOString().split('T')[0];

        // Define o valor do campo de data para a data atual
        todayInput.value = todayDate;

        const accordionItemHeaders = document.querySelectorAll(".accordion-item-header");

        accordionItemHeaders.forEach(accordionItemHeader => {
            accordionItemHeader.addEventListener("click", event => {

                accordionItemHeader.classList.toggle("active");
                const accordionItemBody = accordionItemHeader.nextElementSibling;
                if (accordionItemHeader.classList.contains("active")) {
                    accordionItemBody.style.maxHeight = accordionItemBody.scrollHeight + "px";
                } else {
                    accordionItemBody.style.maxHeight = 0;
                }

            });
        });
    </script>
