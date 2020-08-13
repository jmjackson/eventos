<div class="row justify-content-center">
  <div class="col-md-10">
    <div class="card">
      <div class="card-header py-2 bg-primary">
        <h6 class="m-0 text-center text-white">Lista de Ciudades</h6>
      </div>
      <div class="card-body">
        <table class="table table-sm">
          <thead>
            <tr>
              <th>Id</th>
              <th>Nombre</th>
              <th>Accion</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($cities as $c): ?>
              <tr>
                <td><?php echo $c->Id; ?></td>
                <td><?php echo $c->Name; ?></td>
                <td>
                  <a href="<?php echo base_url() ?>City/details/<?php echo $c->Id; ?>">Abrir</a>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
