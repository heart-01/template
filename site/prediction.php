<link rel="stylesheet" href="../css/bs-stepper.css">
<h1>Crime Prediction</h1>

<div class="container">
    <div class="row">
        <div class="col-sm-9">
            <div id="stepper1" class="bs-stepper linear">
                <div class="bs-stepper-header" role="tablist">
                    <div class="step active" data-target="#test-l-1">
                        <button type="button" class="step-trigger" role="tab" id="stepper1trigger1" aria-controls="test-l-1" aria-selected="true">
                            <span class="bs-stepper-circle h5">1</span>
                            <span class="bs-stepper-label h5">Input</span>
                        </button>
                    </div>
                    <div class="bs-stepper-line"></div>
                    <div class="step" data-target="#test-l-2">
                        <button type="button" class="step-trigger" role="tab" id="stepper1trigger2" aria-controls="test-l-2" aria-selected="false" disabled="disabled">           
                            <span class="bs-stepper-circle h5">2</span>
                            <span class="bs-stepper-label h5">Result</span>
                        </button>
                    </div>
                </div>
                <div class="bs-stepper-content">
                    <form onsubmit="return false">
                        <div id="test-l-1" role="tabpanel" class="bs-stepper-pane active dstepper-block" aria-labelledby="stepper1trigger1">
                            <div class="form-group">
                                <label for="selState">Selete State</label>
                                <select class="form-control" id="selState">
                                    <option selected>Default select</option>
                                    <option>test1</option>
                                    <option>test2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="selType">Crime Type</label>
                                <select class="form-control" id="selType">
                                    <option selected>Default select</option>
                                    <option>test1</option>
                                    <option>test2</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="h5"><u>Input Variable</u></label>
                            </div>

                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td><label for="txtPopulation">Population</label></td>
                                        <td><input type="text" class="form-control" id="txtPopulation" name="txtPopulation" placeholder="Population"></td>
                                        <td><button class="btn btn-primary">test1</button></td>
                                        <td><button class="btn btn-primary">test2</button></td>
                                        <td><button class="btn btn-primary">test3</button></td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtPersornal">Persornal Income</label></td>
                                        <td><input type="text" class="form-control" id="txtPersornal" name="txtPersornal" placeholder="Persornal"></td>
                                        <td><button class="btn btn-primary">test1</button></td>
                                        <td><button class="btn btn-primary">test2</button></td>
                                        <td><button class="btn btn-primary">test3</button></td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtWeapons">No. of weapons</label></td>
                                        <td><input type="text" class="form-control" id="txtWeapons" name="txtWeapons" placeholder="Weapons"></td>
                                        <td><button class="btn btn-primary">test1</button></td>
                                        <td><button class="btn btn-primary">test2</button></td>
                                        <td><button class="btn btn-primary">test3</button></td>
                                    </tr>
                                    <tr>
                                        <td><label for="txtPolice">No. of police</label></td>
                                        <td><input type="text" class="form-control" id="txtPolice" name="txtPolice" placeholder="Police"></td>
                                        <td><button class="btn btn-primary">test1</button></td>
                                        <td><button class="btn btn-primary">test2</button></td>
                                        <td><button class="btn btn-primary">test3</button></td>
                                    </tr>
                                </tbody>
                            </table>
                            
                            <div class="row">
                                <div class="col-sm-6 text-right">
                                    <button class="btn btn-success" onclick="stepper1.next()"><i class="fas fa-chevron-circle-right"></i> Evaluate</button>
                                </div>
                                <div class="col-sm-6 text-left">
                                    <button class="btn text-white" style="background-color: #B7950B;"><i class="fas fa-undo-alt"></i> Reset</button>
                                </div>
                            </div>
                        </div>
                        <div id="test-l-2" role="tabpanel" class="bs-stepper-pane" aria-labelledby="stepper1trigger2">
                            <div class="form-group">
                                <label class="h4">Crime Prediction : Result</label>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="card bg-light border-dark">
                                        <div class="card-body text-dark">
                                            <p>Population : xxxx</p>
                                            <p>Persornal Income : xxxx</p>
                                            <p>No. of weapons : xxxx</p>
                                            <p>No. of police : xxxx</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="card bg-light border-dark">
                                        <div class="card-body">
                                            <p>No. of Crime Prediction</p>
                                            <p>xxxx Times</p>
                                            <div class="progress">
                                                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">25%</div>
                                            </div>
                                            <p>with as% confidence</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="text-center" style="margin-top: 20px;">
                                <button class="btn btn-primary" onclick="stepper1.previous()"><i class="fas fa-chevron-circle-left"></i> Black</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bs-stepper/dist/js/bs-stepper.min.js"></script>
<script>
  var stepper1 = new Stepper(document.querySelector('#stepper1'));
  //var stepper2 = new Stepper(document.querySelector('#stepper2'));
  //var stepper3 = new Stepper(document.querySelector('#stepper3'));
  //var stepper4 = new Stepper(document.querySelector('#stepper4'));
</script>