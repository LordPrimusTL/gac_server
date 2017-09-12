<%@ Page MasterPageFile="~/Site.Master" Language="C#" AutoEventWireup="true" CodeBehind="Verify.aspx.cs" Inherits="D_Success.Verify" %>

<asp:Content ContentPlaceHolderID="head" runat="server">
    <title>Verify | D-Success</title>
</asp:Content>

<asp:Content ContentPlaceHolderID="MainBody" runat="server">
    <div class="container-fluid bg-1 text-center">
        <br />
        <br />
        <h2 class="center-block">Discount! Discount!! Discount!!!</h2>
        <p>We are giving 30% discount and a free coffee to the first 200 of our esteemed customers</p>
        <p><b> Use Code Here!!</b></p>
        <br />
        <br />
        <br />
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-offset-2">
                <form runat="server">
                    <div class="input-group-lg">
                        <br />
                        <br />
                        <br />
                        <label class="label label-danger"><%Response.Write(RedMessage); %></label>
                        <br />
                        <br />
                        <br />
                        <input type="text" required class="form-control" id="Scode" name="Scode" placeholder="Secret Code Here" />
                        <br />
                        <br />
                        <br />
                        <div>
                            &nbsp;<input type="submit" class="btn btn-primary" value="Use Secret Code" runat="server" onserverclick="Click_ServerClick"/>
                        </div>


                        <label class="label label-success"><% Response.Write(MyMessage); %></label>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />

</asp:Content> 