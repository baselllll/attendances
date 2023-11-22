<!DOCTYPE html>
<html lang="en">
@include('includes.header')
<style>
    /* Add this style to prevent text wrapping in cells */
    #employeeTable td {
        white-space: nowrap;
    }
</style>
<body>
<div class="container-xxl bg-white p-0">


    <!-- Navbar & Hero Start -->
    <div class="container-xxl position-relative p-0">
        @include('includes._navbar')

        <div class="container mt-5">
            <div class="table-responsive">
                <table id="employeeTable" class="table  table-bordered" style="    clear: both;

    margin-bottom: 7px !important;
    max-width: none !important;
    border-collapse: separate !important;
    border-spacing: 7px;">
                    <thead>
                    <tr style="background-color: #343a40;color: white">
                        <th>EmpNo</th>
                        <th>EmpName</th>
                        <th>Date</th>
                        <th>DayName</th>
                        <th>InSign</th>
                        <th>InDelayed</th>
                        <th>InDeduct</th>
                        <th>BoutSign</th>
                        <th>BoutLeave</th>
                        <th>BoutDeduct</th>
                        <th>BinSign</th>
                        <th>BinDelay</th>
                        <th>Status</th>
                        <th>Att.Confirmed</th>
                        <th>Notes</th>
                        <th>Details</th>
                    </tr>
                    </thead>
                    <tbody class="table-warning">
                    <tr>
                        <td>35250</td>
                        <td>John Doe</td>
                        <td>2023-11-22</td>
                        <td>Monday</td>
                        <td>09:00 AM</td>
                        <td>10 minutes</td>
                        <td>No</td>
                        <td>05:00 PM</td>
                        <td>No</td>
                        <td>No</td>
                        <td>08:45 AM</td>
                        <td>15 minutes</td>
                        <td>Present</td>
                        <td>Yes</td>
                        <td>Notes for John Doe</td>
                        <td>
                            <a href="#">
                                <button
                                    type="button"
                                    class="btn btn-success confirmationClick"
                                    data-toggle="modal" data-target="#confirmation"><i
                                        class="fas fa-check"></i></button>
                            </a>
                            <a href="#">
                                <button


                                    type="button"
                                    class="btn btn-danger addedNoteClick"
                                    data-toggle="modal" data-target="#addedNote"><i
                                        class="fas fa-sharp fa-solid fa-x fa-bounce fa-lg"
                                        style="color: #c92233;"></i>X
                                </button>
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>35250</td>
                        <td>John Doe</td>
                        <td>2023-11-23</td>
                        <td>Monday</td>
                        <td>09:30 AM</td>
                        <td>20 minutes</td>
                        <td>Yes</td>
                        <td>05:30 PM</td>
                        <td>No</td>
                        <td>No</td>
                        <td>08:30 AM</td>
                        <td>10 minutes</td>
                        <td>Present</td>
                        <td>Yes</td>
                        <td>Notes for Jane Smith</td>
                        <td>
                            <a href="#">
                                <button
                                    type="button"
                                    class="btn btn-success confirmationClick"
                                    data-toggle="modal" data-target="#confirmation"><i
                                        class="fas fa-check"></i></button>
                            </a>
                            <a href="#">
                                <button


                                    type="button"
                                    class="btn btn-danger addedNoteClick"
                                    data-toggle="modal" data-target="#addedNote"><i
                                        class="fas fa-sharp fa-solid fa-x fa-bounce fa-lg"
                                        style="color: #c92233;"></i>X
                                </button>
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@include('includes.scripts')


<div class="modal fade" id="addedNote" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
     aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div>
                    <form action="" method="post">
                        @csrf

                        <input type="hidden" name="notify_confirm" id="notify_confirm" value=""/>
                        <input type="hidden" name="transaction_id" id="transaction_id" value=""/>
                        <input type="hidden" name="type_person" id="type_person" value=""/>
                        <input type="hidden" name="user_type" id="user_type" value=""/>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1"
                                   style="float: left;">@lang('messages.Added_Notes')</label>
                            <textarea name="note" class="form-control" id="note" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" style="margin: 17px 166px;width: 163px"
                                    class="btn btn-primary align-content-center">@lang('messages.Yes')</button>
                        </div>

                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">@lang('messages.Close')</button>
            </div>
        </div>
    </div>
</div>


<div class="modal fade" id="confirmation" tabindex="-1" role="dialog" aria-labelledby="confirmation" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div style="text-align: center">
                    <div>
                        <form action="" method="post">
                            @csrf
                            <input type="hidden" name="notify_confirm" id="notify_confirm" value=""/>
                            <input type="hidden" name="transaction_id" id="transaction_id" value=""/>
                            <input type="hidden" name="type_person" id="type_person" value=""/>
                            <input type="hidden" name="user_type" id="user_type" value=""/>
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1"
                                       style="float: left;">@lang('messages.Added_Notes')</label>
                                <textarea name="note" class="form-control" id="note" rows="3"></textarea>
                            </div>
                            <div class="form-group">

                                <button type="submit" style="margin: 17px 166px;width: 163px"
                                        class="btn btn-primary">@lang('messages.Yes')</button>
                            </div>

                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary"
                                    data-dismiss="modal">@lang('messages.Close')</button>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $('#employeeTable').DataTable();
    });
</script>
</body>
</html>
