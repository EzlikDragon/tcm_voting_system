<!-- Edit Voter Modal -->
<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="editLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="voters_edit.php">
                <div class="modal-header">
                    <h5 class="modal-title" id="editLabel">Edit Voter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" class="id">
                    <div class="form-group">
                        <label for="edit_voters_id">Voter ID</label>
                        <input type="text" class="form-control" id="edit_voters_id" name="voters_id" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_firstname">First Name</label>
                        <input type="text" class="form-control" id="edit_firstname" name="firstname" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_lastname">Last Name</label>
                        <input type="text" class="form-control" id="edit_lastname" name="lastname" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_course">Course</label>
                        <input type="text" class="form-control" id="edit_course" name="course" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_year">Year</label>
                        <input type="text" class="form-control" id="edit_year" name="year" required>
                    </div>
                    <div class="form-group">
                        <label for="edit_password">Password</label>
                        <input type="password" class="form-control" id="edit_password" name="password">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-success" name="edit">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
