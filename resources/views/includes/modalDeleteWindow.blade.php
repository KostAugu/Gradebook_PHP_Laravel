<div class="modal fade" tabindex="-1" id="deleteModal" role="dialog">
    <div class="modal-dialog">       
        <div class="modal-content">
            <div class="modal-header">                
                <h4 class="modal-title">Duomenų trynimas</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
            <form id="deleteForm" action="" method="POST">
                @csrf 
                @method('DELETE')          
                <table class="table text-center">
                    <tr>
                        <td width="100%" class="table-danger"><h5>Ar tikrai norite ištrinti šį įrašą?</h5></td>
                    </tr>
                    <tr>
                        <td width="100%"> 
                            <button class="btn btn-warning btn-lg" id="deleteEntry" type="submit" name="deleteEntry" value="Submit">Taip</button>
                            <button type="button" class="btn btn-primary btn-lg" data-dismiss="modal">Ne</button>
                        </td>
                    </tr>
                </table>
            </form>
            </div>
        </div>    
    </div>
</div>