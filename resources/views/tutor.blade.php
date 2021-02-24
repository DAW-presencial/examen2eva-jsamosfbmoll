<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Tutores - Examen</title>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-3"></div>
            <div class="col-6 mb-5">
                <div class="mb-3 mt-5">
                    <h1>Añadir tutor</h1>
                </div>
                <form action="">
                    <label for="empresa" class="form-label">{{ __("empresa") }}</label>
                    <input required type="text" id="empresa" name="empresa" class="form-control" value="{{ old('empresa') }}"/>
                    <div class="form-text mb-2">{{ __("empresa") }}</div>

                    <label for="tipo_doc" class="form-label">{{ __("tipo_doc") }}</label>
                    <select required class="form-select form-select-sm" id="tipo_doc" name="tipo_doc">
                        <option {{ old("tipo_doc") != "" ? "" : "selected" }}>{{ __("tutores.tipo_doc") }}</option>
                        <option value="nif" {{ old("tipo_doc") == "nif" ? "selected" : "" }}>{{ __("tutores.nif") }}</option>
                        <option value="nie" {{ old("tipo_doc") == "nie" ? "selected" : "" }}>{{ __("tutores.nie") }}</option>
                        <option value="pasaporte" {{ old("tipo_doc") == "pasaporte" ? "selected" : "" }}>{{ __("tutores.pasaporte") }}</option>
                    </select>
                    <div class="form-text mb-2">{{ __("tipo_doc") }}</div>

                    <label for="dni" class="form-label">{{ __("dni") }}</label>
                    <input required type="text" id="dni" name="dni" class="form-control" value="{{ old('dni') }}"/>
                    <div class="form-text mb-2">{{ __("dni") }}</div>

                    <label for="nombre" class="form-label">{{ __("nombre") }}</label>
                    <input required type="text" id="nombre" name="nombre" class="form-control" value="{{ old('nombre') }}"/>
                    <div class="form-text mb-2">{{ __("nombre") }}</div>

                    <label for="primer_apellido" class="form-label">{{ __("primer_apellido") }}</label>
                    <input required type="text" id="primer_apellido" name="primer_apellido" class="form-control" value="{{ old('primer_apellido') }}"/>
                    <div class="form-text mb-2">{{ __("primer_apellido") }}</div>

                    <label for="segundo_apellido" class="form-label">{{ __("segundo_apellido") }}</label>
                    <input type="text" id="segundo_apellido" name="segundo_apellido" class="form-control" value="{{ old('segundo_apellido') }}"/>
                    <div class="form-text mb-2">{{ __("segundo_apellido") }}</div>

                    <label for="pais_dni" class="form-label">{{ __("pais_dni") }}</label>
                    <input required type="text" id="pais_dni" name="pais_dni" class="form-control" value="{{ old('pais_dni') }}"/>
                    <div class="form-text mb-2">{{ __("pais_dni") }}</div>

                    <label for="provincia" class="form-label">{{ __("provincia") }}</label>
                    <input type="text" id="provincia" name="provincia" class="form-control" value="{{ old('provincia') }}"/>
                    <div class="form-text mb-2">{{ __("provincia") }}</div>

                    <label for="municipio" class="form-label">{{ __("municipio") }}</label>
                    <input type="text" id="municipio" name="municipio" class="form-control" value="{{ old('municipio') }}"/>
                    <div class="form-text mb-2">{{ __("municipio") }}</div>

                    <label for="estado" class="form-label">{{ __("estado") }}</label>
                    <select required class="form-select form-select-sm" id="estado" name="estado">
                        <option {{ old("tipo_doc") != "" ? "" : "selected" }}>{{ __("tutores.estado") }}</option>
                        <option value="activo" {{ old("estado") == "activo" ? "selected" : "" }}>{{ __("tutores.activo") }}</option>
                        <option value="inactivo" {{ old("estado") == "inactivo" ? "selected" : "" }}>{{ __("tutores.inactivo") }}</option>
                    </select>
                    <div class="form-text mb-2">{{ __("estado") }}</div>
                
                    <label for="telefono" class="form-label">{{ __("telefono") }}</label>
                    <input required type="text" id="telefono" name="telefono" class="form-control" value="{{ old('telefono') }}"/>
                    <div class="form-text mb-2">{{ __("telefono") }}</div>
                
                    <label for="email" class="form-label">{{ __("email") }}</label>
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}"/>
                    <div class="form-text mb-2">{{ __("email") }}</div>

                    <button type="submit" class="btn btn-primary">{{ __("tutores.anadir") }}</button>
                </form>
            </div>
            <div class="col-3"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
</html>