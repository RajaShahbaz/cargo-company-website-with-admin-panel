@extends('layouts.login')
@section('content')
    <style>
         .invoiceheader>p {
            margin-bottom: 0px;
            margin-top: 0px;
        }
/*
        .invoiceheader>p>i {
            padding-left: 15px;
            color: #FF5E14;
        } */

        .details>p {
            FONT-WEIGHT: Bold;
            FONT-SIZE: 14PX;
        }

        .re_details>p {
            FONT-WEIGHT: Bold;
            FONT-SIZE: 14PX;
        }

        .stylings {
            color: black;
            font-weight: bold;
        }

        @media print {
            .myDivToPrint {
                background-color: white;
                height: 100%;
                width: 100%;
                position: fixed;
                top: 0;
                left: 0;
                margin: 0;
                padding: 15px;
                font-size: 14px;
                line-height: 18px;
            }
        }
    </style>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js"></script>
    <script type="text/javascript" src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
    <script>
        function printDiv() {

            var divContents = document.getElementById("GFG").innerHTML;
            var a = window.open('', '', 'height=1000, width=1000');
            a.document.write('<html>');
            // a.document.write('<body > <h1>Div contents are <br>');
            a.document.write(divContents);
            a.document.write('</body></html>');
            a.document.close();
            a.print();
        }
    </script>
    <script>
        function CreatePDFfromHTML() {
            $('#printbtn').css('display', 'none');
            var HTML_Width = $("#GFG").width();
            var HTML_Height = $("#GFG").height();
            var top_left_margin = 15;
            var PDF_Width = HTML_Width + (top_left_margin * 2);
            var PDF_Height = (PDF_Width * 1.5) + (top_left_margin * 2);
            var canvas_image_width = HTML_Width;
            var canvas_image_height = HTML_Height;

            var totalPDFPages = Math.ceil(HTML_Height / PDF_Height) - 1;

            html2canvas($("#GFG")[0]).then(function(canvas) {
                var imgData = canvas.toDataURL("image/jpeg", 1.0);
                var pdf = new jsPDF('p', 'pt', [PDF_Width, PDF_Height]);
                pdf.addImage(imgData, 'JPG', top_left_margin, top_left_margin, canvas_image_width,
                    canvas_image_height);
                for (var i = 1; i <= totalPDFPages; i++) {
                    pdf.addPage(PDF_Width, PDF_Height);
                    pdf.addImage(imgData, 'JPG', top_left_margin, -(PDF_Height * i) + (top_left_margin * 4),
                        canvas_image_width, canvas_image_height);
                }
                pdf.save("invoice.pdf");
                $('#printbtn').css('display', 'block');
                // $("#content").hide();
            });
        }
    </script>
    <div class="row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6">
    <div id="GFG">
        <div class="container mt-5">
            <div class="row">
                <div class="col-sm-6">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="stylings">Consignment</td>
                                <th scope="col">{{ $inventory->consignment }}</th>
                                <th scope="col">Date:{{ $inventory->created_at->format('d/M/Y') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Office Copy</td>
                                <td class="stylings">Shipper Details</td>
                                <td class="stylings">Reciever Details</td>
                            </tr>
                            <tr>
                                <td class="stylings">Name</td>
                                <td style=" overflow-wrap: break-word;">{{ $inventory->sh_name }}</td>
                                <td style=" overflow-wrap: break-word;">{{ $inventory->re_name }}</td>
                            </tr>
                            <tr>
                                <td class="stylings" style=" overflow-wrap: break-word;">Address</td>
                                <td style=" overflow-wrap: break-word;">{{ $inventory->sh_address }}</td>
                                <td style=" overflow-wrap: break-word;">{{ $inventory->re_address }}</td>
                            </tr>
                            <tr>
                                <td class="stylings">Phone</td>
                                <td>{{ $inventory->sh_phone }}</td>
                                <td>{{ $inventory->re_phone }}</td>
                            </tr>
                            <tr>
                                <td class="stylings">NO. of peices</td>
                                <td class="stylings">{{ $inventory->no_of_peices }}</td>
                                <td rowspan="2" style="vertical-align: middle;">{{ $inventory->package_type }}</td>
                            </tr>
                            <tr>
                                <td class="stylings">Gross Weight</td>
                                <td>{{ $inventory->weight }}</td>

                            </tr>
                            <tr>
                                <td class="stylings">Total Amount</td>
                                <td>{{ $inventory->total_amout }}</td>
                                <td style="color: red">{{ $inventory->destination }}</td>
                            </tr>
                            <tr>
                                <td class="stylings">Signature</td>
                                <td></td>
                                <td style=" overflow-wrap: break-word;"> Delivery date:
                                    {{ $inventory->expected_delivery_date }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">I authorize Travel zone cargo to undertake the export of the above
                                    item.Also undertake that
                                    there is no contraband itemsi.e.<span style="font-weight: bold;font-size:16px">(DRUGS,
                                        BATTRIES, PERFUMES, AEROSOLS, EXPLOSIVES, FIREARMS etc.)</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm-6">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <td class="stylings">Consignment</td>
                                <th scope="col">{{ $inventory->consignment }}</th>
                                <th scope="col">Date:{{ $inventory->created_at->format('d/M/Y') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Cargo Copy</td>
                                <td class="stylings">Shipper Details</td>
                                <td class="stylings">Reciever Details</td>
                            </tr>
                            <tr>
                                <td class="stylings">Phone</td>
                                <td>{{ $inventory->sh_phone }}</td>
                                <td>{{ $inventory->re_phone }}</td>
                            </tr>
                            <tr>
                                <td class="stylings">Name</td>
                                <td style=" overflow-wrap: break-word;">{{ $inventory->sh_name }}</td>
                                <td style=" overflow-wrap: break-word;">{{ $inventory->re_name }}</td>
                            </tr>
                            <tr>
                                <td class="stylings" style=" overflow-wrap: break-word;">Address</td>
                                <td style=" overflow-wrap: break-word;">{{ $inventory->sh_address }}</td>
                                <td style=" overflow-wrap: break-word;">{{ $inventory->re_address }}</td>
                            </tr>
                            <tr>
                                <td class="stylings">NO. of peices</td>
                                <td class="stylings">{{ $inventory->no_of_peices }}</td>
                                <td rowspan="2" style="vertical-align: middle;">{{ $inventory->package_type }}</td>
                            </tr>
                            <tr>
                                <td class="stylings">Gross Weight</td>
                                <td>{{ $inventory->weight }}</td>

                            </tr>
                            <tr>
                                <td class="stylings">Total Amount</td>
                                <td>{{ $inventory->total_amout }}</td>
                                <td style="color: red">{{ $inventory->destination }}</td>
                            </tr>
                            <tr>
                                <td class="stylings">Signature</td>
                                <td></td>
                                <td style=" overflow-wrap: break-word;"> Delivery date:
                                    {{ $inventory->expected_delivery_date }}</td>
                            </tr>
                            <tr>
                                <td colspan="3">I authorize Travel zone cargo to undertake the export of the above
                                    item.Also undertake that
                                    there is no contraband itemsi.e.(<span style="font-weight: bold;font-size:16px">(DRUGS,
                                        BATTRIES, PERFUMES, AEROSOLS, EXPLOSIVES, FIREARMS etc.)</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-4" style="position: relative">
                    <img src="{{ asset('assets/images/logo.png') }}" style="width:50% ; position: absolute;bottom:50" alt="">
                </div>
                <div class="col-sm-7 invoiceheader" style="text-align: right">
                    <div class="row" style="text-align: center">
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 invoiceheader" style="text-align: center">
                            <h5 style="margin-bottom:0px">Stokton on Tess</h5>
                            <p>016 42 617 619</p>
                            <p>40 BowosMold Lane <br> Stockton-On-Tees <br> TS18 3ER</p>
                        </div>
                        <div class="col-sm-1"></div>
                        <div class="col-sm-5 invoiceheader"style="text-align: center">
                            <h5 style="margin-bottom:0px">Middlesbrough</h5>
                            <p>016 42 350 180</p>
                            <p>122 Abingdon Road <br>Middlesbrough <br> TS1 BJX</p>
                        </div>
                        <p style="margin:10px 0px 0px 70px"> <span style="color:#FF5D07"> M.Anwar</span> 07539 311 900 /<span style="color:#FF5D07"> Nouman</span> 07506 986 100</p>
                        <p style="margin:10px 0px 0px 70px">info@travelzonestockton.co.uk</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <td class="stylings">Consignment Number</td>
                                    <th scope="col" style="font-size: 12px;font-weight:bold">{{ $inventory->consignment }}</th>
                                    <th scope="col" style="font-size: 12px;font-weight:bold">Date:{{ $inventory->created_at->format('d/M/Y') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Office Copy</td>
                                    <td class="stylings">Shipper Details</td>
                                    <td class="stylings">Reciever Details</td>
                                </tr>
                                <tr>
                                    <td class="stylings">Name</td>
                                    <td style=" overflow-wrap: break-word;">{{ $inventory->sh_name }}</td>
                                    <td style=" overflow-wrap: break-word;">{{ $inventory->re_name }}</td>
                                </tr>
                                <tr>
                                    <td class="stylings" style=" overflow-wrap: break-word;">Address</td>
                                    <td style=" overflow-wrap: break-word;">{{ $inventory->sh_address }}</td>
                                    <td style=" overflow-wrap: break-word;">{{ $inventory->re_address }}</td>
                                </tr>
                                <tr>
                                    <td class="stylings">Phone</td>
                                    <td>{{ $inventory->sh_phone }}</td>
                                    <td>{{ $inventory->re_phone }}</td>
                                </tr>
                                <tr>
                                    <td class="stylings">NO. of peices</td>
                                    <td class="stylings">{{ $inventory->no_of_peices }}</td>
                                    <td rowspan="2" style="vertical-align: middle;">{{ $inventory->package_type }}</td>



                                </tr>
                                <tr>
                                    <td class="stylings">Gross Weight</td>
                                    <td class="stylings">{{ $inventory->weight }}</td>

                                </tr>
                                <tr>
                                    <td class="stylings">Total Amount</td>
                                    <td class="stylings"> {{ $inventory->total_amout }}</td>
                                    <td class="stylings">Destination: <span style="color: red">{{ $inventory->destination }}</span></td>

                                </tr>
                                <tr>
                                    <td class="stylings">Signature</td>
                                    <td></td>
                                    <td class="stylings" style=" overflow-wrap: break-word;">Expected Delivery date:
                                        {{ $inventory->expected_delivery_date }}</td>
                                </tr>
                                <tr>
                                    <td colspan="3">I authorize Travel zone cargo to undertake the export of the above
                                        item.Also undertake that
                                        there is no contraband itemsi.e.<span style="font-weight: bold;font-size:16px">(DRUGS,
                                            BATTRIES, PERFUMES, AEROSOLS, EXPLOSIVES, FIREARMS etc.)</span></td>
                                </tr>
                            </tbody>
                        </table>
                        <div id="printbtn" class="col-sm-12 mb-5" style="text-align: right">
                            <input type="button" class="btn btn-primary mt-2" value="Print" onclick="CreatePDFfromHTML()">
                        </div>
                </div>
            </div>
            {{-- <div class="row mb-5 pb-5">
                <div class="col-sm-2"></div>
                <div class="col-sm-8" style="border: 2px solid black">
                    <P style="    font-weight: bold; font-size: 20px;">CONSIGNMENT:{{ $inventory->consignment }}</P>
                    <div class="row">

                        <div class="col-sm-6">
                            <P style="font-weight: bold;font-size:16px">SHIPPER DETAILS </P>
                            <div class="row">
                                <div class="col-sm-3 details">
                                    <P>NAME :</P>
                                    <P>PHONE :</P>
                                    <P>ADDRESS:</P>
                                </div>
                                <div class="col-sm-9 ">
                                    <P>{{ $inventory->sh_name }}</P>
                                    <P>{{ $inventory->sh_phone }}</P>
                                    <P style=" overflow-wrap: break-word;">{{ $inventory->sh_address }}
                                    </P>
                                </div>
                            </div>

                        </div>
                        <div class="col-sm-6">
                            <P style="font-weight: bold;font-size:16px">RECIEVER DETAILS</P>
                            <div class="row">
                                <div class="col-sm-3 details">
                                    <P>NAME :</P>
                                    <P>PHONE :</P>
                                    <P>ADDRESS:</P>
                                </div>
                                <div class="col-sm-9 ">
                                    <P>{{ $inventory->re_name }}</P>
                                    <P>{{ $inventory->re_phone }}</P>
                                    <P style=" overflow-wrap: break-word;">{{ $inventory->sh_address }}</P>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-sm-3"></div>
                        <div class="col-sm-9">
                            <div class="row">
                                <div class="col-sm-4 details">
                                    <p>DESTINATION:</p>
                                    <p>NUMBER OF PEICES:</p>
                                    <p>Grss Weight:</p>
                                    <p>TOTAL AMOUNT:</p>
                                    <p>BOOKING DATE:</p>
                                </div>
                                <div class="col-sm-4 ">
                                    <p style="color: #FF5E14;">{{ $inventory->destination }}</p>
                                    <p>{{ $inventory->no_of_peices }}</p>
                                    <p>{{ $inventory->weight }}</p>
                                    <p>{{ $inventory->total_amout }}</p>
                                    <p style=" overflow-wrap: break-word;">{{ $inventory->order_date }}</p>
                                </div>
                            </div>

                        </div>
                        <p style=" overflow-wrap: break-word; font-size:14px;font-weight:bold">I authorize Travel zone cargo
                            to undertake the export of the above item.Also undertake that
                            there is no contraband items<br>i.e.(<span
                                style="font-weight: bold;font-size:16px">DRUGS,BATTRIES,PERFUMES,AEROSOLS,EXPLOSIVES,FIREARMS
                                etc.</span>)
                        </p>
                        <p style="font-weight: bold;font-size:16px;color:#FF5E14"> EXPECTED DELIVERY DATE:
                            {{ $inventory->expected_delivery_date }}
                        </p>
                    </div>
                </div>
                <div id="printbtn" class="col-sm-10" style="text-align: right">
                    <input type="button" class="btn btn-primary mt-2" value="Print" onclick="CreatePDFfromHTML()">
                </div>
            </div> --}}
        </div>
    </div>
</div>
</div>
@endsection
