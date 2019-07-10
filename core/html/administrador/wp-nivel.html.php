<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">

	<div class="kt-container kt-body  kt-grid kt-grid--ver" id="kt_body">
		<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor">
			
			<!-- begin:: Content Head -->
			<div class="kt-subheader   kt-grid__item" id="kt_subheader">
			</div>
			<!-- end:: Content Head -->

			<!-- begin:: Content -->
			<div class="kt-container  kt-container--fluid  kt-grid__item kt-grid__item--fluid">
				<div class="row">
					<div class="col-xs-6 col-lg-12">

						<div class="kt-portlet">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<span class="kt-portlet__head-icon">
										<i class="flaticon-customer"></i>
									</span>
									<h3 class="kt-portlet__head-title">
										Nivel Académico
									</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<div class="kt-portlet__head-actions" data-placement="top" data-toggle="kt-tooltip" data-original-title="Añadir Grado">
										<a href="#" class="btn btn-outline-success btn-sm btn-icon btn-icon-md" data-toggle="modal" data-target="#kt_modal_add">
											<i class="flaticon-plus"></i>
										</a>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div id="modal_datatable_local_source"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<!-- End:: Content -->

		</div>
	</div>
</div>

<div class="modal fade" id="kt_modal_add" tabindex="-1" role="dialog" aria-labelledby="add" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">AÑADIR GRADO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Grado:</label>
                        <input type="text" class="form-control" id="var_grado" name="var_grado">
                    </div>
                    
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Añadir</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kt_modal_update" tabindex="-1" role="dialog" aria-labelledby="update" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">ACTUALIZAR GRADO</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="form-control-label">Grado:</label>
                        <input type="text" class="form-control" id="var_grado" name="var_grado">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-success">Actualizar</button>
            </div>
        </div>
    </div>
</div>