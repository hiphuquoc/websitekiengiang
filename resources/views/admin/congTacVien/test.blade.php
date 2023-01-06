<div class="card">
    <!-- ===== Table ===== -->
    <div class="table-responsive">
    <table class="table table-bordered" style="min-width:900px;">
        <thead>
            <tr>
                <th style="width:60px;"></th>
                <th class="text-center" style="width:180px;">Trạng thái</th>
                <th class="text-center">Thông tin</th>
                <th class="text-center">Tổng tiền</th>
                <th class="text-center" width="60px">-</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list as $item)
                <tr id="ship_booking_209">
                    <td class="text-center">{{ ($loop->index + 1) }}</td>
                    <td style="text-align:center;">
                        <div style="margin-bottom:0.25rem;">{{ date('H:i d-m-Y', strtotime($item->created_at) )}}</div>
                        <div class="badge" style="font-size:0.95rem;background:#283747">Chưa xác nhận</div>
                    </td>
                    <td>
                        <div class="oneLine">
                            {{ $item->name ?? null }} - {{ $item->phone }} {{ (!empty($item->zalo)) ? '(Zalo '.$item->zalo.')' : null }} {{ (!empty($item->email)) ? '- '.$item->email : null }}
                        </div>
                        {{-- <!-- số lượng -->
                        <div class="oneLine">
                            Dịch vụ: <span class="highLight">{{ $item->service->name ?? null }}</span> / <span class="highLight">{{ $item->price->name ?? null }}</span>
                        </div> --}}
                    </td>
                    <td>
                        {{-- <div class="oneLine">
                            Khuyến mãi <span class="highLight">{{ (!empty($item->promotion) ? $item->promotion.'%' : '-') }}</span> thành tiền <span class="highLight">{{ (!empty((integer) $item->total)) ? number_format($item->total) : $item->total }}</span>
                        </div>
                        @if(!empty($item->congTacVien))
                            <div class="oneLine">
                                Cộng tác viên <span class="highLight">{{ $item->congTacVien->name }}</span>
                            </div>
                        @endif --}}
                    </td>
                    <td style="vertical-align:top;display:flex;">
                        <div class="icon-wrapper iconAction">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                    <circle cx="12" cy="12" r="3"></circle>
                                </svg>
                                <div>Xem</div>
                            </a>
                        </div>
                        <div class="icon-wrapper iconAction">
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                                </svg>
                                <div>Sửa</div>
                            </a>
                        </div>
                        <div class="icon-wrapper iconAction">
                            <div class="actionDelete" onclick="deleteItem('209');">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-square">
                                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect>
                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                </svg>
                                <div>Xóa</div>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    </div>
    <div class="pull-right pagination">
    <ul class="pagination">
        <li class="page-item prev disabled"><a class="page-link" href=""></a></li>
        <li class="page-item active" aria-current="page">
            <a class="page-link" href="https://hitour.vn/admin/ship_booking?page=1">1</a>
        </li>
        <li class="page-item"><a class="page-link" href="https://hitour.vn/admin/ship_booking?page=2">2</a></li>
        <li class="page-item"><a class="page-link" href="https://hitour.vn/admin/ship_booking?page=3">3</a></li>
        <li class="page-item next"><a class="page-link" href="https://hitour.vn/admin/ship_booking?page=2"></a></li>
    </ul>
    </div>
    <!-- Pagination -->
</div>