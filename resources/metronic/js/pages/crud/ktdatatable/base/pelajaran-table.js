"use strict";
// Class definition

var KTDatatableHtmlTableDemo = function() {
    // Private functions

    // demo initializer
    var demo = function() {

		var datatable = $('#kt_datatable').KTDatatable({
			data: {
				saveState: {cookie: false},
			},
			search: {
				input: $('#kt_datatable_search_query'),
				key: 'generalSearch'
			},
			columns: [
				{
					field: 'Mata Pelajaran',
					title: 'Mata Pelajaran',
				},
        {
					field: 'Link',
          title: 'Link',
          template: function(row) {
            let sts = 1;
            if (row.Link !== '#') {
              sts = 2;
            }
						var status = {
              1: {
                  'title': 'Tidak Tersedia',
                  'state': 'danger'
                  },
							2: {
                  'title': 'Download',
                  'state': 'success'
                  },
						};
            return `<span class="label label-${status[sts].state} label-dot mr-2"></span><a class="font-weight-bold text-${status[sts].state}" href="${row.Link === '#' ? 'javascript:void(0)' : '/redirect/' + row.Link}" target="_blank">${status[sts].title}</a>`;
					}
				},
        {
					field: 'Option',
          title: 'Option',
          template: function (row) {
            return `<a title="Edit details" class="btn btn-sm btn-clean btn-icon btn-icon-md edit_study" data-toggle="modal" data-link="${row['Link']}" data-target="#edit_study" data-id="${row.Option}"><i class="la la-edit"></i> Edit</a>`;
          }
				},
			],
		});
    };

    $("#kt_datatable").on("click", ".edit_study", function () {
      let id = $(this).data("id")
      let link = $(this).data("link") === "#" ? "" : $(this).data("link");
      $("#modal_pelajaran_input").val(link)
      $("#modal_submit_form").on("click", function(){
        window.location.href = `/edit_study?id=${id}&&link=${$("#modal_pelajaran_input").val()}`;
      })
    })
    return {
      // Public functions
      init: function() {
          // init dmeo
          demo();
      },
    };
}();

jQuery(document).ready(function() {
	KTDatatableHtmlTableDemo.init();
});
