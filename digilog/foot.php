 			<!-- Footer -->
 			<footer id="footer">
 				<ul class="copyright">
 					<li>&copy; 2019 DAMAN SBU</li><li><a href="http://damansbu.net">www.damansbu.com</a></li>
 				</ul>
 			</footer>

 		</div>

 		<!-- Scripts -->

 		<script src="assets/js/jquery.scrollex.min.js"></script>
 		<script src="assets/js/jquery.scrolly.min.js"></script>

 		<script src="assets/js/browser.min.js"></script>
 		<script src="assets/js/breakpoints.min.js"></script>
 		<script src="assets/js/util.js"></script>
 		<script src="assets/js/main.js"></script>
 		<script src="assets/js/dataTables.responsive.min.js"></script>

 		<script src="assets/js/jquery.dataTables.min.js"></script>

 		<script src="assets/js/dataTables.bootstrap.min.js"></script>
 		<script src="assets/js/bootstrap-datepicker.js"></script>
 		<script src="https://cdnjs.cloudflare.com/ajax/libs/multi-select/0.9.12/js/jquery.multi-select.js"></script>
 		
 		<script type="text/javascript">
 			(function($){
 				var nextId=0;
 				var Filestyle=function(element,options){
 					this.options=options;this.$elementFilestyle=[];
 					this.$element=$(element)
 				};
 				Filestyle.prototype={
 					clear:function(){
 						this.$element.val("");
 						this.$elementFilestyle.find(":text").val("");
 						this.$elementFilestyle.find(".badge").remove()
 					},destroy:function(){
 						this.$element.removeAttr("style").removeData("filestyle");
 						this.$elementFilestyle.remove()
 					},disabled:function(value){
 						if(value===true){
 							if(!this.options.disabled){
 								this.$element.attr("disabled","true");
 								this.$elementFilestyle.find("label").attr("disabled","true");
 								this.options.disabled=true
 							}
 						}else{
 							if(value===false){
 								if(this.options.disabled){
 									this.$element.removeAttr("disabled");
 									this.$elementFilestyle.find("label").removeAttr("disabled");
 									this.options.disabled=false
 								}
 							}else{
 								return this.options.disabled
 							}
 						}
 					},buttonBefore:function(value){
 						if(value===true){
 							if(!this.options.buttonBefore){
 								this.options.buttonBefore=true;
 								if(this.options.input){
 									this.$elementFilestyle.remove();
 									this.constructor();
 									this.pushNameFiles()
 								}
 							}
 						}else{
 							if(value===false){
 								if(this.options.buttonBefore){
 									this.options.buttonBefore=false;
 									if(this.options.input){
 										this.$elementFilestyle.remove();
 										this.constructor();
 										this.pushNameFiles()
 									}
 								}
 							}else{
 								return this.options.buttonBefore
 							}
 						}
 					},icon:function(value){
 						if(value===true){
 							if(!this.options.icon){
 								this.options.icon=true;
 								this.$elementFilestyle.find("label").prepend(this.htmlIcon())
 							}
 						}else{
 							if(value===false){
 								if(this.options.icon){
 									this.options.icon=false;
 									this.$elementFilestyle.find(".icon-span-filestyle").remove()
 								}
 							}else{
 								return this.options.icon
 							}
 						}
 					},input:function(value){
 						if(value===true){
 							if(!this.options.input){
 								this.options.input=true;
 								if(this.options.buttonBefore){
 									this.$elementFilestyle.append(this.htmlInput())
 								}else{
 									this.$elementFilestyle.prepend(this.htmlInput())
 								}
 								this.$elementFilestyle.find(".badge").remove();
 								this.pushNameFiles();
 								this.$elementFilestyle.find(".group-span-filestyle").addClass("input-group-btn")
 							}
 						}else{
 							if(value===false){
 								if(this.options.input){
 									this.options.input=false;
 									this.$elementFilestyle.find(":text").remove();
 									var files=this.pushNameFiles();
 									if(files.length>0&&this.options.badge){
 										this.$elementFilestyle.find("label").append(' <span class="badge">'+files.length+"</span>")
 									}
 									this.$elementFilestyle.find(".group-span-filestyle").removeClass("input-group-btn")
 								}
 							}else{
 								return this.options.input
 							}
 						}
 					},size:function(value){
 						if(value!==undefined){
 							var btn=this.$elementFilestyle.find("label"),input=this.$elementFilestyle.find("input");
 							btn.removeClass("btn-lg btn-sm");
 							input.removeClass("input-lg input-sm");
 							if(value!="nr"){
 								btn.addClass("btn-"+value);
 								input.addClass("input-"+value)
 							}
 						}else{
 							return this.options.size
 						}
 					},placeholder:function(value){
 						if(value!==undefined){
 							this.options.placeholder=value;
 							this.$elementFilestyle.find("input").attr("placeholder",value)
 						}else{
 							return this.options.placeholder
 						}
 					},buttonText:function(value){
 						if(value!==undefined){
 							this.options.buttonText=value;
 							this.$elementFilestyle.find("label .buttonText").html(this.options.buttonText)
 						}else{
 							return this.options.buttonText
 						}
 					},buttonName:function(value){
 						if(value!==undefined){
 							this.options.buttonName=value;
 							this.$elementFilestyle.find("label").attr({"class":"btn "+this.options.buttonName})
 						}else{
 							return this.options.buttonName
 						}
 					},iconName:function(value){
 						if(value!==undefined){
 							this.$elementFilestyle.find(".icon-span-filestyle").attr({"class":"icon-span-filestyle "+this.options.iconName})
 						}else{
 							return this.options.iconName
 						}
 					},htmlIcon:function(){
 						if(this.options.icon){
 							return'<span class="icon-span-filestyle '+this.options.iconName+'"></span> '
 						}else{
 							return""
 						}
 					},htmlInput:function(){
 						if(this.options.input){
 							return'<input type="text" class="form-control '+(this.options.size=="nr"?"":"input-"+this.options.size)+'" placeholder="'+this.options.placeholder+'" disabled> '
 						}else{
 							return""
 						}
 					},pushNameFiles:function(){
 						var content="",files=[];
 						if(this.$element[0].files===undefined){
 							files[0]={name:this.$element[0]&&this.$element[0].value}
 						}
 						else{
 							files=this.$element[0].files
 						}
 						for(var i=0;i<files.length;i++){
 							content+=files[i].name.split("\\").pop()+", "
 						}
 						if(content!==""){
 							this.$elementFilestyle.find(":text").val(content.replace(/\, $/g,""))
 						}else{
 							this.$elementFilestyle.find(":text").val("")
 						}return files
 					},constructor:function(){
 						var _self=this,html="",id=_self.$element.attr("id"),files=[],btn="",$label;
 						if(id===""||!id){
 							id="filestyle-"+nextId;
 							_self.$element.attr({id:id});
 							nextId++
 						}
 						btn='<span class="group-span-filestyle '+(_self.options.input?"input-group-btn":"")+'"><label for="'+id+'" class="btn '+_self.options.buttonName+" "+(_self.options.size=="nr"?"":"btn-"+_self.options.size)+'" '+(_self.options.disabled?'disabled="true"':"")+">"+_self.htmlIcon()+'<span class="buttonText">'+_self.options.buttonText+"</span></label></span>";
 						html=_self.options.buttonBefore?btn+_self.htmlInput():_self.htmlInput()+btn;
 						_self.$elementFilestyle=$('<div class="bootstrap-filestyle input-group">'+html+"</div>");
 						_self.$elementFilestyle.find(".group-span-filestyle").attr("tabindex","0").keypress(function(e){
 							if(e.keyCode===13||e.charCode===32){
 								_self.$elementFilestyle.find("label").click();
 								return false
 							}
 						});
 						_self.$element.css({position:"absolute",clip:"rect(0px 0px 0px 0px)"}).attr("tabindex","-1").after(_self.$elementFilestyle);
 						if(_self.options.disabled){
 							_self.$element.attr("disabled","true")
 						}_self.$element.change(function(){
 							var files=_self.pushNameFiles();
 							if(_self.options.input==false&&_self.options.badge){
 								if(_self.$elementFilestyle.find(".badge").length==0){
 									_self.$elementFilestyle.find("label").append(' <span class="badge">'+files.length+"</span>")
 								}else{
 									if(files.length==0){
 										_self.$elementFilestyle.find(".badge").remove()
 									}else{
 										_self.$elementFilestyle.find(".badge").html(files.length)
 									}
 								}
 							}else{
 								_self.$elementFilestyle.find(".badge").remove()
 							}
 						});
 						if(window.navigator.userAgent.search(/firefox/i)>-1){
 							_self.$elementFilestyle.find("label").click(function(){_self.$element.click();return false})
 						}
 					}
 				};
 				var old=$.fn.filestyle;
 				$.fn.filestyle=function(option,value){
 					var get="",element=this.each(function(){
 						if($(this).attr("type")==="file"){
 							var $this=$(this),data=$this.data("filestyle"),options=$.extend({},$.fn.filestyle.defaults,option,typeof option==="object"&&option);
 							if(!data){
 								$this.data("filestyle",(data=new Filestyle(this,options)));data.constructor()
 							}if(typeof option==="string"){
 								get=data[option](value)}
 							}
 						});
 					if(typeof get!==undefined){
 						return get
 					}else{
 						return element
 					}
 				};
 				$.fn.filestyle.defaults={
 					buttonText:"Pilih File",
 					iconName:"glyphicon glyphicon-folder-open",
 					buttonName:"btn-default",
 					size:"nr",
 					input:true,
 					badge:true,
 					icon:true,
 					buttonBefore:false,
 					disabled:false,
 					placeholder:""
 				};
 				$.fn.filestyle.noConflict=function(){
 					$.fn.filestyle=old;
 					return this
 				};
 				$(function(){
 					$(".filestyle").each(function(){
 						var $this=$(this),options={
 							input:$this.attr("data-input")==="false"?false:true,
 							icon:$this.attr("data-icon")==="false"?false:true,
 							buttonBefore:$this.attr("data-buttonBefore")==="true"?true:false,
 							disabled:$this.attr("data-disabled")==="true"?true:false,
 							size:$this.attr("data-size"),
 							buttonText:$this.attr("data-buttonText"),
 							buttonName:$this.attr("data-buttonName"),
 							iconName:$this.attr("data-iconName"),
 							badge:$this.attr("data-badge")==="false"?false:true,
 							placeholder:$this.attr("data-placeholder")
 						};
 						$this.filestyle(options)
 					})
 				})
 			})(window.jQuery);
 		</script>

 		<script type="text/javascript" language="javascript" >

 			function fetch_data_logbook(){
 				var dataTable = $('#tabel-logbook').DataTable({
 					ajax : {
 						url:"fetch_lb.php",
 						type:"POST"

 					},
 					columns :
 					[
 					{ data: 'label'},
 					{ data: 'alpro'},
 					{ data: 'nama'},
 					{ data: 'nik'},
 					{ data: 'loker'},
 					{ data: 'aktifitas'},
 					{ data: 'hasil'},
 					{ data: 'tanggal'},
 					{ data: 'file', render : function(data){
 						if(data !== ''){
 							return "<img src='./uploads/before/"+data+"' style='width:80px; height: 60px;'>"
 						}else{
 							return "";
 						}
 					}},

 					{ data: 'file_after', render : function(data){
 						if(data !== ''){
 							return "<img src='./uploads/after/"+data+"' style='width:80px; height: 60px;'>"
 						}else{
 							return "";
 						}
 					}},

 					{ data: 'id', render : function(data){
 						return "<button class='primary' style='margin-top: 15px;' onClick='deleteData("+data+")'>Delete</button>"

 					}},

				// { data: null, render : function(data,type,row){
				// 	return "<button class='primary' onClick='editData("+data.id+")'>Edit</button>" + "<button class='danger' onClick='deleteData("+data.id+")'>Delete</button>"
				// }}
				],
				fixedHeader: true,
				stateSave: true,
				aLengthMenu: [[10, 25, 50, 100, -1], [10, 25, 50, 100, "All"]],
				pagingType: 'simple_numbers',
				ordering: true,
				oLanguage: {
					oPaginate: {
						sNext: '<i class="fa fa-chevron-right"></i>',
						sPrevious: '<i class="fa fa-chevron-left"></i>'
					}
				}
			});
 			}

 		</script>

 		<script type="text/javascript">
 			$(document).ready(function() {
 				$('#formAddData').submit(function(event) {
 					event.preventDefault();
					$('#buttonSaveData').text('creating...'); //change button text
			    	$('#buttonSaveData').attr('disabled',true); //set button disable
			    	var formData = new FormData($('#formAddData')[0]);
			    	$.ajax({
			    		url : "insert.php",
			    		type: "POST",
			    		data: formData,
			    		contentType: false,
			    		processData: false,
			    		success: function(data)
			    		{
				        	// var object = JSON.parse(data);
				        	// $("#alert-free").html("<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>"+object+"</strong></div>");
				            // console.log(data);
				            // $("#alert-free").html(data);
				            // $('#btn_free').text('Submit'); //change button text
				            $('#buttonSaveData').attr('disabled',false); //set button enable
				            $('#modalAddData').modal('hide');
				            $('#tabel-panel-digilog').DataTable().destroy();
				            fetch_data();
				            $('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
				            $("#formAddData")[0].reset();
							$('#buttonSaveData').text('Save changes'); //change button text
							window.location.replace('./layout.php?alpro=<?php echo $_GET['alpro'];?>');
						},
						error: function (jqXHR, textStatus, errorThrown)
						{
							console.log(jqXHR, textStatus, errorThrown);
				            $('#buttonSaveData').text('eror'); //change button text
				            $('#buttonSaveData').attr('disabled',false); //set button enable
				        }
				    });
			    });

 				$('#formEditData').submit(function(event) {
 					event.preventDefault();
					$('#buttonSaveEditData').text('editting...'); //change button text
			    	$('#buttonSaveEditData').attr('disabled',true); //set button disable
			    	var formData = new FormData($('#formEditData')[0]);
			    	$.ajax({
			    		url : "submiteditdata.php",
			    		type: "POST",
			    		data: formData,
			    		contentType: false,
			    		processData: false,
			    		success: function(data)
			    		{
				        	// var object = JSON.parse(data);
				        	// $("#alert-free").html("<div class='alert alert-danger alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>"+object+"</strong></div>");
				            // console.log(data);
				            // $("#alert-free").html(data);
				            // $('#btn_free').text('Submit'); //change button text
				            $('#buttonSaveEditData').attr('disabled',false); //set button enable
							$('#buttonSaveEditData').text('Save changes'); //change button text
							window.location.replace('./layout.php?alpro=<?php echo $_GET['alpro'];?>');
							$('#modalEditData').modal('hide');
							$('#tabel-panel-digilog').DataTable().destroy();
							fetch_data();
							$('#alert_message').html('<div class="alert alert-success">'+data+'</div>');
							$("#formEditData")[0].reset();
						},
						error: function (jqXHR, textStatus, errorThrown)
						{
							console.log(jqXHR, textStatus, errorThrown);
				            $('#buttonSaveEditData').text('eror'); //change button text
				            $('#buttonSaveEditData').attr('disabled',false); //set button enable
				        }
				    });
			    });

 				$('#formDeleteData').submit(function(event) {
 					event.preventDefault();
					$('#buttonDeleteData').text('deleting...'); //change button text
			    	$('#buttonDeleteData').attr('disabled',true); //set button disable
			    	var formData = new FormData($('#formDeleteData')[0]);
			    	$.ajax({
			    		url : "submitdeletedata.php",
			    		type: "POST",
			    		data: formData,
			    		contentType: false,
			    		processData: false,
			    		success: function(data)
			    		{
				            $('#buttonDeleteData').attr('disabled',false); //set button enable
							$('#buttonDeleteData').text('Save changes'); //change button text
							window.location.replace('./layout.php?alpro=<?php echo $_GET['alpro'];?>');
							$('#modalDeleteData').modal('hide');
							$('#tabel-panel-digilog').DataTable().destroy();
							fetch_data();
							$('#alert_message').html('<div class="alert alert-danger">'+data+'</div>');
							$("#formDeleteData")[0].reset();
						},
						error: function (jqXHR, textStatus, errorThrown)
						{
							console.log(jqXHR, textStatus, errorThrown);
				            $('#buttonDeleteData').text('eror'); //change button text
				            $('#buttonDeleteData').attr('disabled',false); //set button enable
				        }
				    });
			    });
 			});

 		</script>
 	</body>
 	</html>
