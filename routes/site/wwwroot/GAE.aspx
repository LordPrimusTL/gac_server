<%@ Page MasterPageFile="~/Site.Master" Language="C#" AutoEventWireup="true" CodeBehind="GAE.aspx.cs" Inherits="D_Success.GAE" %>
<asp:Content ContentPlaceHolderID="head" runat="server">
        <title>GAE | D-Success</title>
</asp:Content>
<asp:Content ContentPlaceHolderID ="MainBody" runat="server">
    <div class="container-fluid">
        <div class="container-fluid bg-1 text-center">
            <br />
            <br />
            <h2 class="center-block">Discount! Discount!! Discount!!!</h2>
            <p>We are giving 30% discount and a free coffee to the first 200 of our esteemed customers</p>
            <br />
            <br />
        </div>
            <div class="jumbotron">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-7">
                            <div>
                                <form runat="server">
                                    <div class="input-group">
                                        <div class="form-group">
                                            <input type="text" required class="form-control" id="UserName" name="UserName" placeholder="Admin UserName" />
                                            <br />
                                            <br />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required class="form-control" id="Password" name="Password" placeholder="Password" />
                                            <br />
                                            <br />
                                            <label class="label label-danger"><%Response.Write(RedMessage); %></label>
                                        </div>
                                        <button class="btn btn-primary" runat="server" onserverclick="Unnamed_ServerClick">Generate Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 visible-lg visible-md">
                            <ul>
                                <li class="divider-vertical"></li>
                            </ul>
                        </div>

                        <div class="col-lg-7 col-md-7 col-sm-7 col-xs-7">
                            <table class="table table-responsive">
                                <asp:PlaceHolder ID="PlaceHolder1" runat="server"></asp:PlaceHolder>
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>
</asp:Content>