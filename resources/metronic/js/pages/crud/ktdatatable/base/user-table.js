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
					field: 'ID',
					type: 'number',
				},
				{
					field: 'Kelas',
          title: 'Kelas',
          // template: function(row) {
					// 	var status = {
					// 		10: {'title': 'X'},
					// 		11: {'title': 'XI'},
					// 		12: {'title': 'XII'},
					// 	};
          //   return status[row.Kelas].title;
					// }
				},
        {
					field: 'Latihan 1',
          title: 'Latihan 1'
				},
        {
					field: 'Latihan 2',
          title: 'Latihan 2'
				},
        {
					field: 'Latihan 3',
          title: 'Latihan 3'
				},
        {
					field: 'UK1',
          title: 'UK1'
				},
        {
					field: 'UK2',
          title: 'UK2'
				},
        {
					field: 'Semester',
          title: 'Semester',
          autoHide: false
				},
        {
					field: 'Pelajaran',
          title: 'Pelajaran',
          autoHide: false,
          template: function(row) {
						return '<span class="label font-weight-bold label-lg label-light-primary label-inline">' + row.Pelajaran + '</span>';
					}
				}
			],
		});



        $('#kt_datatable_search_semester').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Semester');
        });

        $('#kt_datatable_search_class').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Kelas');
        });

        $('#kt_datatable_search_study').on('change', function() {
            datatable.search($(this).val().toLowerCase(), 'Pelajaran');
        });

        $('#kt_datatable_search_semester, #kt_datatable_search_class, #kt_datatable_search_study').selectpicker();

    };

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
