<%@ Page MasterPageFile="~/Site.Master" Language="C#" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="DSuccessUnilag.Default" %>

<asp:Content runat="server" ContentPlaceHolderID="head">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width,initial scale=1" />
    <title>Home | D-Success</title>
    <link href="Content/Style/bootstrap-theme.css" rel="stylesheet"  type="text/css" />
    <link href="Content/Style/bootstrap.min.css" rel="stylesheet"  type="text/css"/>
    <link href="Content/Style/Custom.css" rel="stylesheet"  type="text/css" />
    <link rel="shortcut icon" href="Content/Images/logo.ico" />
</asp:Content>
<asp:Content ContentPlaceHolderID="DefaultActive" runat="server">
    <li class="active"><a href="#Services" ><b>Services</b></a></li>                
</asp:Content>

<asp:Content runat="server" ContentPlaceHolderID="MainBody">
    <div>
        <br />
        <br />
        <div class="container-fluid">

            <div class="container-fluid bg-1 text-center">
                <form id="Form1" method="post" runat="server">
                    <br />
                    <br />
                    <h2 class="center-block">Discount! Discount!! Discount!!!</h2>
                    <p>We are giving 30% discount and a free coffee to the first 200 of our esteemed customers</p>
                    <p>Read the instructions carefully to partake of this offer</p>
                    <br />
                    <br />
                    <button class="btn btn-primary" id="SubmitFromHomepage" runat="server" onserverclick="ExecuteAction">Continue  >> </button>
                    <br />
                    <br />
                    <br />
                </form>
            </div>
            <div class="jumbotron">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                             <div id="my-carousel" class="carousel slide" data-ride="carousel">
                                   <!-- Indicators -->
                                   <ol class="carousel-indicators">
                                       <li data-target="#my-carousel" data-slide-to="0" class="active"></li>
                                       <li data-target="#my-carousel" data-slide-to="1"></li>
                                       <li data-target="#my-carousel" data-slide-to="2"></li>
                                   </ol>

                                   <!-- Wrapper for slides -->
                                   <div class="carousel-inner" role="listbox">
                                       <div class="item active">
                                           <img alt="First slide" src="Content/Images/a.jpg" class="img-responsive">
                                           <div class="carousel-caption">
                                               <h3></h3>
                                               <p></p>
                                           </div>
                                       </div>
                                       <div class="item">
                                               <img alt="First slide" src="Content/Images/b.jpg" class="img-responsive">                 
                                               <div class="carousel-caption">
                                               <h3></h3>
                                               <p></p>
                                           </div>
                                       </div>
                                       <div class="item">
                                           <img alt="First slide" src="Content/Images/c.jpg" class="img-responsive">
                                           <div class="carousel-caption">
                                               <h3></h3>
                                               <p></p>
                                           </div>
                                       </div>
                                   </div>

                                   <!-- Controls -->
                                   <a class="left carousel-control" href="#my-carousel" role="button" data-slide="prev">
                                       <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                       <span class="sr-only">Previous</span>
                                   </a>
                                   <a class="right carousel-control" href="#my-carousel" role="button" data-slide="next">
                                       <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                       <span class="sr-only">Next</span>
                                   </a>
                               </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md">
                            <ul>
                                <li class="divider-vertical"></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">

                            <h2 class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;
                                <img src="Content/Images/OurServices.png" alt="Our Services" /></h2>
                            <ul class="Offer">
                                <p class="">Online Registration(University of Lagos - Unilag)</p>
                                <li>Post Utme Screening Application</li>
                                <li>Diploma/Foundation Application</li>
                                <li>School of Postgraduate Application(PGD, Masters,PHD)</li>
                                <li>Undergraduate Portal Activities</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="Content/Scripts/bootstrap.min.js"></script>
</asp:Content>
 