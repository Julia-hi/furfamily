/**
 * This is part of FURFAMILY project
 *
 * Used only for admin dashboard page
 *  jQuery required - v.3.7.1
 * @author Yulia Tropina yuju.web@gmail.com
 */

"use strict"

window.addEventListener("load", () => {

    $("#createBtn").on("click", function() {
        showCreateForm();
      })
})

/**
 * function for create form
 */
function showCreateForm(){
    $('#myModal').on('shown.bs.modal', function () {
        $('#myInput').focus()
      })
}


