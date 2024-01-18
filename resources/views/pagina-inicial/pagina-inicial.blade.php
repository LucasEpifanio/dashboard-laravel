@extends('welcome')
@section('main')
<main class="dashboarddata-parent">
    <div class="dashboarddata">
        <div class="cards-graph-transaction">
            <div class="cards">
                <div class="total-balance">
                    <img class="icon" alt="" src="./storage/assets/icons/Icon.png" />

                    <div class="total-balance1">
                        <div class="net-worth">Net Worth</div>
                        <b class="b">$524</b>
                    </div>
                </div>
                <div class="total-spending">
                    <img class="icon" alt="" src="./storage/assets/icons/Icon (1).png" />

                    <div class="main1">
                        <div class="net-worth">Spending</div>
                        <b class="b">$250</b>
                    </div>
                </div>
                <div class="total-spending">
                    <img class="icon" alt="" src="./storage/assets/icons/Icon (2).png" />

                    <div class="main1">
                        <div class="net-worth">Saved</div>
                        <b class="b">$550</b>
                    </div>
                </div>
            </div>
            <img class="image-12-icon" alt="" src="./storage/assets/img/image 12.png" />
        </div>
        <div class="recent-transaction">

                <div class="nicolas-aguirre">Watch List</div>
                <div class="view-all-parent">
                    <div class="nicolas-aguirre">View All</div>
                    <img class="ic-expand-more-24px-1-icon" alt="" src="./storage/assets/icons/ic-expand-more-24px 1.svg" />
                </div>

            <div class="index1">
                <div class="tickername">Ticker/Name</div>
                <div class="type-parent">
                    <div class="type">TYPE</div>
                    <div class="type">AMOUNT</div>
                    <div class="type">DATE</div>
                </div>
            </div>
            <div class="main3">
                <div class="frame-parent">
                    <div class="frame-group">
                        <div class="image-8-wrapper">
                            <img class="image-8-icon" alt="" src="./storage/assets/img/image 8.png" />
                        </div>
                        <div class="frame-wrapper">
                            <div class="aapl-parent">
                                <div class="aapl">AAPL</div>
                                <div class="apple-inc">Apple. Inc</div>
                            </div>
                        </div>
                    </div>
                    <div class="stock-parent">
                        <div class="stock">Stock</div>
                        <div class="div">$420.84</div>
                        <div class="apr-2022">14 Apr 2022</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wallet-schedule">
        <img class="image-10-icon" alt="" src="./storage/assets/img/image 10.png" />

        <div class="scheduled-transfers">

                <div class="nicolas-aguirre">Scheduled Transfers</div>
                <div class="view-all-group">
                    <div class="nicolas-aguirre">View All</div>
                    <img class="ic-expand-more-24px-1-icon" alt="" src="./storage/assets/icons/ic-expand-more-24px 1.svg" />
                </div>

            <div class="main4">
                <div class="main5">
                    <div class="frame-container">
                        <div class="name-date-wrapper">
                            <div class="name-date">
                                <div class="nicolas-aguirre">MSFT</div>
                                <div class="april-28-2022">April 28, 2022 at 11:00</div>
                            </div>
                        </div>
                        <div class="div1">- $435,00</div>
                    </div>
                </div>
                <div class="main5">
                    <div class="frame-container">
                        <div class="name-date-wrapper">
                            <div class="name-date">
                                <div class="nicolas-aguirre">TSLA</div>
                                <div class="april-28-2022">April 28, 2022 at 11:00</div>
                            </div>
                        </div>
                        <div class="div1">- $435,00</div>
                    </div>
                </div>
                <div class="main5">
                    <div class="frame-container">
                        <div class="name-date-wrapper">
                            <div class="name-date">
                                <div class="nicolas-aguirre">META</div>
                                <div class="april-28-2022">April 28, 2022 at 11:00</div>
                            </div>
                        </div>
                        <div class="div1">- $435,00</div>
                    </div>
                </div>
                <div class="main5">
                    <div class="frame-container">
                        <div class="name-date-wrapper">
                            <div class="name-date">
                                <div class="nicolas-aguirre">MSFT</div>
                                <div class="april-28-2022">April 28, 2022 at 11:00</div>
                            </div>
                        </div>
                        <div class="div1">- $435,00</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

    <link rel="stylesheet" href="{{ asset("./storage/assets/styles/pagina-inicial/pagina-inicial.css")}}">
    <link rel="stylesheet" href="{{ asset("./storage/assets/styles/pagina-inicial/medias-queries.css")}}">
@endsection

