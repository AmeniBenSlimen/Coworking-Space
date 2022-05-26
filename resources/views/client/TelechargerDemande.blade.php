<html>
<head>
    <!-- <base href="https://demos.telerik.com/kendo-ui/pdf-export/page-layout">
    <style>html { font-size: 14px; font-family: Arial, Helvetica, sans-serif; } --></style>
    <title></title>
   <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.common.min.css" />
<!--      <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.black.min.css" />
    <link rel="stylesheet" href="https://kendo.cdn.telerik.com/2017.1.223/styles/kendo.black.mobile.min.css" /> -->

    <script src="https://kendo.cdn.telerik.com/2017.1.223/js/jquery.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.1.223/js/jszip.min.js"></script>
    <script src="https://kendo.cdn.telerik.com/2017.1.223/js/kendo.all.min.js"></script>
</head>
<body>
<div id="example">
    <div class="box wide hidden-on-narrow">
        
        
        <a class="btn btn-primary" href="{{route('TelechargerDemande',$abonnement->id)}}" download onclick="getPDF('.pdf-page')">
  <i class="fa fa-file-pdf-o" aria-hidden="true"></i>
 Download PDF
</a>
    </div>

    <div class="page-container hidden-on-narrow">
        <div class="pdf-page size-a4">
            <div class="pdf-header">
                <span class="company-logo">
                    ADECO
                </span>
                <span class="invoice-number">Siliana 6100</span>
            </div>
           
            <div class="for">
                <h3>Coordonnée</h3>
                <p>Nom :<br />
                    Prénom :<br />
                    Date de Naissance :<br/>
                    Téléphone : <br/>
                    E-mail : <br/>
                </p>
            </div>

            <div class="from">
                <h3>***************</h3>
                <p style="padding-bottom: 20px; border-bottom: 1px solid #e5e5e5;">{{$abonnement->nom}} <br />
                {{$abonnement->prenom}} <br />
                {{$abonnement->date_naissance}}<br/>
                {{$abonnement->telephone}}<br/>
                {{$abonnement->email}}
                </p>
                <p style="padding-top: 20px;">
                    User ID: {{$abonnement->id}}<br />
                    Date de Création: {{$abonnement->created_at}}<br />
                    Résultat : Accepter
                </p>
            </div>
            <div class="pdf-body">
                <div id="grid"></div>
                <p class="signature">
                    Signature: ________________ <br /><br />
                    Date: {{$abonnement->deleted_at}}
                </p>
                <hr style="height:1px;border-width:0;background-color:gray">
            </div>
        </div>
    </div>
    
    <div class="responsive-message"></div>

    <style>
        /*
            Use the DejaVu Sans font for display and embedding in the PDF file.
            The standard PDF fonts have no support for Unicode characters.
        */
        .pdf-page {
            font-family: "DejaVu Sans", "Arial", sans-serif;
        }
    </style>

    <
    <style>
        .pdf-page {
            margin: 0 auto;
            box-sizing: border-box;
            box-shadow: 0 5px 10px 0 rgba(0,0,0,.3);
            background-color: #fff;
            color: #333;
            position: relative;
        }
        .pdf-header {
            position: absolute;
            top: .5in;
            height: .6in;
            left: .5in;
            right: .5in;
            border-bottom: 1px solid #e5e5e5;
        }
        .invoice-number {
            padding-top: .17in;
            float: right;
        }
        .pdf-footer {
            position: absolute;
            bottom: .5in;
            height: .6in;
            left: .5in;
            right: .5in;
            padding-top: 10px;
            border-top: 1px solid #e5e5e5;
            text-align: left;
            color: #787878;
            font-size: 12px;
        }
        .pdf-body {
            position: absolute;
            top: 3.7in;
            bottom: 1.2in;
            left: .5in;
            right: .5in;
        }

        .size-a4 { width: 8.3in; height: 11.7in; }
        .size-letter { width: 8.5in; height: 11in; }
        .size-executive { width: 7.25in; height: 10.5in; }

        .company-logo {
            font-size: 30px;
            font-weight: bold;
            color: #3aabf0;
        }
        .for {
            position: absolute;
            top: 1.5in;
            left: .5in;
            width: 2.5in;
        }
        .from {
            position: absolute;
            top: 1.5in;
            right: .5in;
            width: 2.5in;
        }
        .from p, .for p {
            color: #787878;
        }
        .signature {
            padding-top: .5in;
        }
    </style>

</div>


</body>
