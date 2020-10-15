var userLevel = document.getElementById('user_level').value;
var idLevel = document.getElementById('iduserlevel').value;
var tableUser = $('#datauser').DataTable({
	"bProcessing": true,
	"bJQueryUI": true,
	"sPaginationType": "full_numbers",
	"sAjaxSource": window.location.origin + '/sipop/user/LoadData',
	"sAjaxDataProp": "aaData",
	"fnRender": function (oObj) {
		uss = oObj.aData["Username"];
	},
	"aoColumns": [{
			"mDataProp": "USERNAME",
			bSearchable: true
		},
		{
			"mDataProp": "TIPE",
			bSearchable: true
		},
		{
			"mDataProp": "NAMA_USER",
			bSearchable: true
		},
		{
			"mDataProp": "ALAMAT",
			bSearchable: true
		},
		{
			"mDataProp": "TELP",
			bSearchable: true
		},
		{
			"mDataProp": "EMAIL",
			bSearchable: true
		},
		{
			"mDataProp": function (data, type, val) {
				pKode = data.ID_USER;
				var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="edituser(' + pKode + ')"><i class="fa fa-edit"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapususer(' + pKode + ')"><i class="fa fa-trash "></i></a>';

				return (btn).toString();
			},
			bSortable: false,
			bSearchable: false
		}
	],
	"bDestroy": true,
});
if (userLevel == 'Administrator') {
	var tableOperator = $('#dataoperator').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": window.location.origin + '/sipop/operator/LoadData',
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj) {
			uss = oObj.aData["Username"];
		},
		"aoColumns": [{
				"mDataProp": "NAMA_OPERATOR",
				bSearchable: true
			},
			{
				"mDataProp": "ALAMAT",
				bSearchable: true
			},
			{
				"mDataProp": "KELURAHAN",
				bSearchable: true
			},
			{
				"mDataProp": "KECAMATAN",
				bSearchable: true
			},
			{
				"mDataProp": "KABUPATEN",
				bSearchable: true
			},
			{
				"mDataProp": "KODE_POS",
				bSearchable: true
			},
			{
				"mDataProp": function (data, type, val) {
					pKode = data.ID_OPERATOR;
					var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="editop(' + pKode + ')"><i class="fa fa-edit"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusop(' + pKode + ')"><i class="fa fa-trash "></i></a>';

					return (btn).toString();
				},
				bSortable: false,
				bSearchable: false
			}
		],
		"bDestroy": true,
	});
} else {
	$('#opsiop').css('display', 'none');
	$('#tambahop').css('display', 'none');
	var tableOperator = $('#dataoperator').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": window.location.origin + '/sipop/operator/LoadData',
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj) {
			uss = oObj.aData["Username"];
		},
		"aoColumns": [{
				"mDataProp": "NAMA_OPERATOR",
				bSearchable: true
			},
			{
				"mDataProp": "ALAMAT",
				bSearchable: true
			},
			{
				"mDataProp": "KELURAHAN",
				bSearchable: true
			},
			{
				"mDataProp": "KECAMATAN",
				bSearchable: true
			},
			{
				"mDataProp": "KABUPATEN",
				bSearchable: true
			},
			{
				"mDataProp": "KODE_POS",
				bSearchable: true
			},
		],
		"bDestroy": true,
	});
}
if (userLevel == 'Administrator') {
	var tablePOP = $('#datapop').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": window.location.origin + '/sipop/penggunabts/LoadData',
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj) {
			uss = oObj.aData["Username"];
		},
		"aoColumns": [{
				"mDataProp": "nama_bts",
				bSearchable: true
			},
			{
				"mDataProp": "ssid",
				bSearchable: true
			},
			{
				"mDataProp": "produk",
				bSearchable: true
			},
			{
				"mDataProp": "ip_address",
				bSearchable: true
			},
			{
				"mDataProp": "mac_address",
				bSearchable: true
			},
			{
				"mDataProp": "nama_operator",
				bSearchable: true
			},
			{
				"mDataProp": function (data, type, val) {
					pKode = data.id_pengguna_pop;
					var btn = '<a href="#" class="btn btn-success  btn-xs" title="Detail Data" onclick="detilpop(' + pKode + ')"><i class="fa fa-search-plus"></i></a>  \n\ <a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="editpop(' + pKode + ')"><i class="fa fa-edit"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapuspop(' + pKode + ')"><i class="fa fa-trash "></i></a>';

					return (btn).toString();
				},
				bSortable: false,
				bSearchable: false
			}
		],
		"bDestroy": true,
	});
} else {
	var tablePOP = $('#datapop').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": window.location.origin + '/sipop/penggunabts/LoadByLevel/' + idLevel,
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj) {
			uss = oObj.aData["Username"];
		},
		"aoColumns": [{
				"mDataProp": "nama_bts",
				bSearchable: true
			},
			{
				"mDataProp": "ssid",
				bSearchable: true
			},
			{
				"mDataProp": "produk",
				bSearchable: true
			},
			{
				"mDataProp": "ip_address",
				bSearchable: true
			},
			{
				"mDataProp": "mac_address",
				bSearchable: true
			},
			{
				"mDataProp": "nama_operator",
				bSearchable: true
			},
			{
				"mDataProp": function (data, type, val) {
					pKode = data.id_pengguna_pop;
					var btn = '<a href="#" class="btn btn-success  btn-xs" title="Detail Data" onclick="detilpop(' + pKode + ')"><i class="fa fa-search-plus"></i></a>  \n\ <a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="editpop(' + pKode + ')"><i class="fa fa-edit"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapuspop(' + pKode + ')"><i class="fa fa-trash "></i></a>';

					return (btn).toString();
				},
				bSortable: false,
				bSearchable: false
			}
		],
		"bDestroy": true,
	});
}
if (userLevel == 'Administrator') {
	var tableBts = $('#databts').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": window.location.origin + '/sipop/bts/LoadData',
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj) {
			uss = oObj.aData["Username"];
		},
		"aoColumns": [{
				"mDataProp": "NAMA_BTS",
				bSearchable: true
			},
			{
				"mDataProp": "LOKASI_BTS",
				bSearchable: true
			},
			{
				"mDataProp": "LAT_BTS",
				bSearchable: true
			},
			{
				"mDataProp": "LONG_BTS",
				bSearchable: true
			},
			{
				"mDataProp": function (data, type, val) {
					pKode = data.ID_BTS;
					var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="editbts(' + pKode + ')"><i class="fa fa-edit"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusbts(' + pKode + ')"><i class="fa fa-trash "></i></a>';

					return (btn).toString();
				},
				bSortable: false,
				bSearchable: false
			}
		],
		"bDestroy": true,
	});
} else {
	$('#opsibts').css('display', 'none');
	$('#tambahbts').css('display', 'none');
	var tableBts = $('#databts').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": window.location.origin + '/sipop/bts/LoadData',
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj) {
			uss = oObj.aData["Username"];
		},
		"aoColumns": [{
				"mDataProp": "NAMA_BTS",
				bSearchable: true
			},
			{
				"mDataProp": "LOKASI_BTS",
				bSearchable: true
			},
			{
				"mDataProp": "LAT_BTS",
				bSearchable: true
			},
			{
				"mDataProp": "LONG_BTS",
				bSearchable: true
			},
		],
		"bDestroy": true,
	});
}
if (userLevel == 'Administrator') {
	var tableRouter = $('#datarouter').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": window.location.origin + '/sipop/router/LoadData',
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj) {
			uss = oObj.aData["Username"];
		},
		"aoColumns": [{
				"mDataProp": "nama_bts",
				bSearchable: true
			},
			{
				"mDataProp": "produk_router",
				bSearchable: true
			},
			{
				"mDataProp": "identitas",
				bSearchable: true
			},
			{
				"mDataProp": "nama_produk_router",
				bSearchable: true
			},
			{
				"mDataProp": "ip_router",
				bSearchable: true
			},
			{
				"mDataProp": "mac_router",
				bSearchable: true
			},
			{
				"mDataProp": "nama_operator",
				bSearchable: true
			},
			{
				"mDataProp": function (data, type, val) {
					pKode = data.id_pengguna_router;
					var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="editrouter(' + pKode + ')"><i class="fa fa-edit"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusrouter(' + pKode + ')"><i class="fa fa-trash "></i></a>';

					return (btn).toString();
				},
				bSortable: false,
				bSearchable: false
			}
		],
		"bDestroy": true,
	});
} else {
	var tableRouter = $('#datarouter').DataTable({
		"bProcessing": true,
		"bJQueryUI": true,
		"sPaginationType": "full_numbers",
		"sAjaxSource": window.location.origin + '/sipop/router/LoadByLevel/' + idLevel,
		"sAjaxDataProp": "aaData",
		"fnRender": function (oObj) {
			uss = oObj.aData["Username"];
		},
		"aoColumns": [{
				"mDataProp": "nama_bts",
				bSearchable: true
			},
			{
				"mDataProp": "produk_router",
				bSearchable: true
			},
			{
				"mDataProp": "identitas",
				bSearchable: true
			},
			{
				"mDataProp": "nama_produk_router",
				bSearchable: true
			},
			{
				"mDataProp": "ip_router",
				bSearchable: true
			},
			{
				"mDataProp": "mac_router",
				bSearchable: true
			},
			{
				"mDataProp": "nama_operator",
				bSearchable: true
			},
			{
				"mDataProp": function (data, type, val) {
					pKode = data.id_pengguna_router;
					var btn = '<a href="#" class="btn btn-primary btn-xs" title="Edit Data" onclick="editrouter(' + pKode + ')"><i class="fa fa-edit"></i></a> \n\ <a href="#" class="btn btn-danger btn-xs" title="Hapus Data" onclick="hapusrouter(' + pKode + ')"><i class="fa fa-trash "></i></a>';

					return (btn).toString();
				},
				bSortable: false,
				bSearchable: false
			}
		],
		"bDestroy": true,
	});
}
var tableUserlog = $('#datauserlog').DataTable({
	"bProcessing": true,
	"bJQueryUI": true,
	"sPaginationType": "full_numbers",
	"sAjaxSource": window.location.origin + '/sipop/userlog/LoadData',
	"sAjaxDataProp": "aaData",
	"fnRender": function (oObj) {
		uss = oObj.aData["Username"];
	},
	"aoColumns": [{
			"mDataProp": "username",
			bSearchable: true
		},
		{
			"mDataProp": "nama_user",
			bSearchable: true
		},
		{
			"mDataProp": "tipe",
			bSearchable: true
		},
		{
			"mDataProp": "waktu",
			bSearchable: true
		},
	],
	"bDestroy": true,
});
