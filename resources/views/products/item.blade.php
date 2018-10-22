<tr>
    <th scope="row">{{ $tablo->tablo_id }}</th>
    <td>{{ $tablo->tablo_title }}</td>
    <td>{{ $tablo->tablo_painter }}</td>
    <td><img src="{{ asset('/storage/tablo/'. $tablo->tablo_img) }}" alt="Img" with="100px" height="100px"></td>
    <td>{{ $tablo->tablo_caption }}</td>
    <td>{{ number_format($tablo->tablo_price) }}</td>
    <td>{{ $tablo->tablo_category }}</td>
    <td>{{ $tablo->tablo_color_tag }}</td>
    <td>{{ $tablo->tablo_view_count }}</td>
    <td>{{ $tablo->tablo_sells_count }}</td>
    <td>{{ $tablo->created_at }}</td>
    <td>{{ $tabloStatus[$tablo->tablo_status] }}
    <td>
        <a href="{{ route('admin.product.delete',[$tablo->tablo_id]) }}">
            حذف
        </a>
        <a href="{{ route('admin.product.edit',[$tablo->tablo_id]) }}">
            ویرایش
        </a>
    </td>
</tr>
