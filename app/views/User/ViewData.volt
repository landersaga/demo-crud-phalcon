{% for datas in data %}
{% if loop.first %}
<table border="1" align="center">
  <thead>
    <tr>
      <th>ID</th>
      <th>Name</th>
      <th>Address</th>
      <th>Contact</th>
      <th>Sex</th>
    </tr>
  </thead>
{% endif %}
  <tbody>
    <tr>
      <td>{{ datas.id_user }}</td>
      <td>{{ datas.name }}</td>
      <td>{{ datas.address }}</td>
      <td>{{ datas.contact }}</td>
      <td>{{ datas.sex }}</td>
      <td><a href="{{ url('user/edit/' ~ datas.id_user) }}">Edit</a></td>
      <td><a href="{{ url('user/hapus/' ~ datas.id_user) }}">Delete</a></td>
    </tr>
  </tbody>
{% if loop.last %}
</table>
{% endif %}
{% else %}
  No Data
{% endfor %}
