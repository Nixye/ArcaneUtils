<!DOCTYPE html>
<html>
    <head>
        <title>Arcane Dracma calculation</title>
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
        <link href="{{ asset('css/calculation.css') }}" rel="stylesheet">
    </head>
    <body>

        <div class="registration-form">
            <form>
                {{-- <div class="form-icon"> <span><i class="icon icon-user"></i></span> </div> --}}
                <h1> Cálculo de Dracmas </h1><br>
                <div class="form-group">
                    <label for="reputacao" class="form-label">Reputação</label>
                    <select class="form-select" id="reputacao" required>
                        <option selected>I</option>
                        <option>II</option>
                        <option>III</option>
                        <option>IV</option>
                        <option>V</option>
                    </select>
                </div>
                <div class="form-group"> <br> <label class="form-check-label">Adicionais</label> </div>
                <div class="form-group">
                    <div class="form-check form-check">
                        <input class="form-check-input" type="checkbox" id="LB" value="LB">
                        <label class="form-check-label" for="LB">Lights Blessing</label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="checkbox" id="AFB" value="AFB">
                        <label class="form-check-label" for="AFB">Afrodite Blessing</label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="checkbox" id="AB" value="AB">
                        <label class="form-check-label" for="AB">Arcane's Blessing</label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="checkbox" id="MB" value="MB">
                        <label class="form-check-label" for="MB">Mida's Blessing</label>
                    </div>
                    <div class="form-check form-check">
                        <input class="form-check-input" type="checkbox" id="RE" value="RE">
                        <label class="form-check-label" for="RE">Rank Épico+</label>
                    </div>
                </div>
                <div class="form-group"> <button type="button" class="btn btn-block create-account" onclick="sendGetDracmaCalculation('{{ url('') }}')">Calcular</button> </div>
                <div>
                    <br><br><br>
                    <H2>Total: <b id="calculo">????</b> Dracmas</H2>
                </div>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        <script src="{{ asset('js/calculation.js') }}"></script>
    </body>
</html>
