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

function showCreateForm(){
    const createForm = document.querySelector("#createCatModal");
    const createFormContent=
    "<form><input type='text'placegolder='имя котика'><input type='file'></form>"

    createForm.append(createFormContent);
}
