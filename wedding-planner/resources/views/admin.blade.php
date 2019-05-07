@extends('layouts.app')

@section('content')
    <div class="container">
        <br/>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>St Juliana Parish Wedding Record Application</h3></div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <p>Welcome to the St Juliana Parish Wedding Record Application. With this application,
                                    St Juliana Parish Staff will be able to create and search St Juliana Parish Wedding
                                    Records.</p>
                                <p>Click on <strong>Create</strong> to initiate a Wedding Record.</p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <p>To Create a Wedding Record, you will need the following information:</p>
                                <ul>
                                    <li>Names, addresses, phone numbers, email addresses, and religious denomination of
                                        both the bride and groom
                                    </li>
                                    <li>Date and time of the Wedding Event</li>
                                    <li>Priest(s) and/or Deacon(s) to officiate at the Mass or Ceremony</li>
                                    <li>Information on sacrament and annulment certificates as applicable</li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <p>Click on <strong>Search</strong> to find an existing Wedding Record or Wedding
                                    Records.</p>
                            </div>
                            <div class="col-md-10 offset-md-1">
                                <p>To Search Wedding Record(s), you will need the following information:</p>
                                <ul>
                                    <li>Date, month and/or year of wedding event</li>
                                    <li>The bride or groom's name</li>
                                </ul>
                            </div>
                            <div class="col-md-12">
                                <p>Once your record(s) are found, you will be able to view, edit, delete or print these
                                    records.</p>
                                <p>After a designated St Juliana Parish staff member creates the initial Wedding Record,
                                    an email will be sent to the couple enabling them to register and use the Wedding
                                    Mass or Wedding Ceremony Planning Tool.</p>
                                <p>Once the Wedding Mass or Ceremony Planning Tool is completed, a designated St.
                                    Juliana Parish staff member will be able to view, edit, delete, or print records at
                                    their convenience.</p>
                            </div>
                            
                            <div class="col-md-10 offset-md-1">
                                 <p>For more help, please click <a target="_blank" href="https://www.youtube.com/playlist?list=PL69wByR8Cq7Edp2vamnINehR1cJqscgUC">here.</a></p>
                             </div>
                            


                        </div>
                        <div class="row">
                            <div class="col-md-6 align-middle text-center">
                                <a class="btn btn-success" href="weddings/search" role="button">Search</a>
                            </div>
                            <div class="col-md-6 align-middle text-center">
                                <a class="btn btn-success" href="/weddings/create" role="button">Create</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br />
@endsection