<form class="fnt-form" action="send.php" method="post">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputTelephon">Телефон</label>
                      <input type="text" name="tel" class="form-control" id="inputTelephon" placeholder="">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress">Адрес</label>
                    <input type="text" name="adres" class="form-control" id="inputAddress" placeholder="">
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputState">Размер</label>
                      <select id="inputState" name="razmer" class="form-control">
                        <option selected>25 см</option>
                        <option>40 см</option>
                        <option>70 см</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState">Цвет</label>
                      <select id="inputState" name="color" class="form-control">
                        <option selected>Белый</option>
                        <option>Черный</option>
                        <option>Красный</option>
                        <option>Розовый</option>
                        <option>Фиолетовый</option>
                        <option>Синий</option>
                        <option>Голубой</option>
                      </select>
                    </div>
                  </div>
                          <button class="button" type="submit">
                    <span class="submit">Отправить</span>
                    <span class="loading"><i class="fa fa-refresh"></i></span>
                    <span class="check"><i class="fa fa-check"></i></span>
                  </button>
    </form>