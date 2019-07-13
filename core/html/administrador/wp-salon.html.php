<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

	<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
			
			<!-- begin:: Content Head -->
			<div class="kt-subheader   kt-grid__item" id="kt_subheader">
			</div>
			<!-- end:: Content Head -->

            <div class="kt-container ">
                <div class="kt-portlet">
                    <div class="kt-portlet__body">
                        <div class="kt-infobox">
                            <div class="kt-infobox__header">
                                <h2 class="kt-infobox__title">
                                    <span class="kt-portlet__head-icon">
                                        <i class="flaticon-calendar-1"></i>
                                    </span>Salón Académico</h2>
                            </div>
                            <div class="kt-infobox__body">
                                <div class="row">
                                    <div class="col-lg-3">
                                       <form>
                                            <div class="form-group">
                                                <label for="recipent-name" class="form-control-label ">Personal:</label>
                                                <select name="var_personal" id="var_personal" class="form-control selectPersonal">
                                                    <option value="0">SELECCIONAR PERSONAL</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="recipient-name" class="form-control-label">Nombre Salon:</label>
                                                <input type="text" class="form-control" id="var_nombre" name="var_nombre">
                                            </div>
                                            <div class="form-group">
                                                <button type="button" class="btn btn-success">Añadir</button>
                                            </div>
                                            
                                        </form>
                                    </div>
                                    <div class="col-lg-9">
                                        <!--begin::Accordion-->
                                        <div id="modal_datatable_local_source"></div>
                                        <!--end::Accordion-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

		</div>
	</div>
</div>

<div class="modal fade" id="kt_modal_update" tabindex="-1" role="dialog" aria-labelledby="update" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR AREA</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Area:</label>
                        <input type="text" class="form-control" id="var_area" name="var_area">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Actualizar</button>
            </div>
        </div>
    </div>
</div>