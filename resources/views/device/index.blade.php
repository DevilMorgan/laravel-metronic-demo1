@extends('layouts.app')

@section('template_title')
    Device
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Device') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('devices.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Name</th>
										<th>Ip</th>
										<th>Temp</th>
										<th>Cpu</th>
										<th>Total Memory</th>
										<th>Free Memory</th>
										<th>Active Pppoe</th>
										<th>Maxactivepppoe</th>
										<th>Active Stations</th>
										<th>Max Active Stations</th>
										<th>Avg Ccq</th>
										<th>Volts</th>
										<th>Current</th>
										<th>Soft</th>
										<th>Firm</th>
										<th>Ping</th>
										<th>Downs Today</th>
										<th>Location Id</th>
										<th>Devicetype Id</th>
										<th>Model</th>
										<th>Uptime</th>
										<th>Used Memory</th>
										<th>Lastseen</th>
										<th>Lastdown</th>
										<th>Serial No</th>
										<th>Dftqueuesze</th>
										<th>Channel</th>
										<th>Freq</th>
										<th>Ssid</th>
										<th>Log</th>
										<th>Lastsnmpupdate</th>
										<th>Pollstatus</th>
										<th>Ping1</th>
										<th>Ping2</th>
										<th>Ping3</th>
										<th>Txpower</th>
										<th>Wds</th>
										<th>Airmaxq</th>
										<th>Airmaxc</th>
										<th>Mikrotik File Exists</th>
										<th>Sch Update</th>
										<th>Dns Server</th>
										<th>Fault Description</th>
										<th>Backed Up</th>
										<th>Date Backed Up</th>
										<th>As Number</th>
										<th>Acknowledged</th>
										<th>Default Gateway</th>
										<th>Default Gateway Id</th>
										<th>Txrate</th>
										<th>Rxrate</th>
										<th>Txsignal</th>
										<th>Rxsignal</th>
										<th>Sstp Server</th>
										<th>Pptp Server</th>
										<th>L2Tp Server</th>
										<th>Ovpn Server</th>
										<th>Queue Count</th>
										<th>Max Active Hotspot</th>
										<th>Active Hotspot</th>
										<th>Voltage Monitor</th>
										<th>Voltage Threshold</th>
										<th>Voltage Seen At</th>
										<th>Ping4</th>
										<th>Comment</th>
										<th>Voltage Offset</th>
										<th>Solar Charge</th>
										<th>Batt1</th>
										<th>Batt2</th>
										<th>Batt3</th>
										<th>Batt4</th>
										<th>Poll Enabled</th>
										<th>Admin Password</th>
										<th>Admin Password Set At</th>
										<th>Noise Floor</th>
										<th>Signal</th>
										<th>Txfreq</th>
										<th>Rxfreq</th>
										<th>Qam</th>
										<th>Wireless Mode</th>
										<th>Signal1</th>
										<th>Signal2</th>
										<th>Md5 Username</th>
										<th>Md5 Password</th>
										<th>Antenna Id</th>
										<th>Antenna Heading</th>
										<th>Antenna Tilt</th>
										<th>Ftp Port</th>
										<th>Api Port</th>
										<th>Ssh Port</th>
										<th>Http Port</th>
										<th>Winbox Port</th>
										<th>Telnet Port</th>
										<th>License 1</th>
										<th>License 2</th>
										<th>Last Download Test</th>
										<th>Last Upload Test</th>
										<th>Last Speed Time</th>
										<th>Snmp Community</th>
										<th>Include Interfaces</th>
										<th>Psu1</th>
										<th>Psu2</th>
										<th>Upstream Device Id</th>
										<th>Dl Util</th>
										<th>Ul Util</th>
										<th>Max Dl Util</th>
										<th>Max Ul Util</th>
										<th>Update Started</th>
										<th>Previous Serial Nr</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($devices as $device)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $device->name }}</td>
											<td>{{ $device->ip }}</td>
											<td>{{ $device->temp }}</td>
											<td>{{ $device->cpu }}</td>
											<td>{{ $device->total_memory }}</td>
											<td>{{ $device->free_memory }}</td>
											<td>{{ $device->active_pppoe }}</td>
											<td>{{ $device->maxactivepppoe }}</td>
											<td>{{ $device->active_stations }}</td>
											<td>{{ $device->max_active_stations }}</td>
											<td>{{ $device->avg_ccq }}</td>
											<td>{{ $device->volts }}</td>
											<td>{{ $device->current }}</td>
											<td>{{ $device->soft }}</td>
											<td>{{ $device->firm }}</td>
											<td>{{ $device->ping }}</td>
											<td>{{ $device->downs_today }}</td>
											<td>{{ $device->location_id }}</td>
											<td>{{ $device->devicetype_id }}</td>
											<td>{{ $device->model }}</td>
											<td>{{ $device->uptime }}</td>
											<td>{{ $device->used_memory }}</td>
											<td>{{ $device->lastseen }}</td>
											<td>{{ $device->lastdown }}</td>
											<td>{{ $device->serial_no }}</td>
											<td>{{ $device->dftqueuesze }}</td>
											<td>{{ $device->channel }}</td>
											<td>{{ $device->freq }}</td>
											<td>{{ $device->ssid }}</td>
											<td>{{ $device->log }}</td>
											<td>{{ $device->lastsnmpupdate }}</td>
											<td>{{ $device->pollstatus }}</td>
											<td>{{ $device->ping1 }}</td>
											<td>{{ $device->ping2 }}</td>
											<td>{{ $device->ping3 }}</td>
											<td>{{ $device->txpower }}</td>
											<td>{{ $device->wds }}</td>
											<td>{{ $device->airmaxq }}</td>
											<td>{{ $device->airmaxc }}</td>
											<td>{{ $device->mikrotik_file_exists }}</td>
											<td>{{ $device->sch_update }}</td>
											<td>{{ $device->dns_server }}</td>
											<td>{{ $device->fault_description }}</td>
											<td>{{ $device->backed_up }}</td>
											<td>{{ $device->date_backed_up }}</td>
											<td>{{ $device->as_number }}</td>
											<td>{{ $device->acknowledged }}</td>
											<td>{{ $device->default_gateway }}</td>
											<td>{{ $device->default_gateway_id }}</td>
											<td>{{ $device->txrate }}</td>
											<td>{{ $device->rxrate }}</td>
											<td>{{ $device->txsignal }}</td>
											<td>{{ $device->rxsignal }}</td>
											<td>{{ $device->sstp_server }}</td>
											<td>{{ $device->pptp_server }}</td>
											<td>{{ $device->l2tp_server }}</td>
											<td>{{ $device->ovpn_server }}</td>
											<td>{{ $device->queue_count }}</td>
											<td>{{ $device->max_active_hotspot }}</td>
											<td>{{ $device->active_hotspot }}</td>
											<td>{{ $device->voltage_monitor }}</td>
											<td>{{ $device->voltage_threshold }}</td>
											<td>{{ $device->voltage_seen_at }}</td>
											<td>{{ $device->ping4 }}</td>
											<td>{{ $device->comment }}</td>
											<td>{{ $device->voltage_offset }}</td>
											<td>{{ $device->solar_charge }}</td>
											<td>{{ $device->batt1 }}</td>
											<td>{{ $device->batt2 }}</td>
											<td>{{ $device->batt3 }}</td>
											<td>{{ $device->batt4 }}</td>
											<td>{{ $device->poll_enabled }}</td>
											<td>{{ $device->admin_password }}</td>
											<td>{{ $device->admin_password_set_at }}</td>
											<td>{{ $device->noise_floor }}</td>
											<td>{{ $device->signal }}</td>
											<td>{{ $device->txfreq }}</td>
											<td>{{ $device->rxfreq }}</td>
											<td>{{ $device->qam }}</td>
											<td>{{ $device->wireless_mode }}</td>
											<td>{{ $device->signal1 }}</td>
											<td>{{ $device->signal2 }}</td>
											<td>{{ $device->md5_username }}</td>
											<td>{{ $device->md5_password }}</td>
											<td>{{ $device->antenna_id }}</td>
											<td>{{ $device->antenna_heading }}</td>
											<td>{{ $device->antenna_tilt }}</td>
											<td>{{ $device->ftp_port }}</td>
											<td>{{ $device->api_port }}</td>
											<td>{{ $device->ssh_port }}</td>
											<td>{{ $device->http_port }}</td>
											<td>{{ $device->winbox_port }}</td>
											<td>{{ $device->telnet_port }}</td>
											<td>{{ $device->license_1 }}</td>
											<td>{{ $device->license_2 }}</td>
											<td>{{ $device->last_download_test }}</td>
											<td>{{ $device->last_upload_test }}</td>
											<td>{{ $device->last_speed_time }}</td>
											<td>{{ $device->snmp_community }}</td>
											<td>{{ $device->include_interfaces }}</td>
											<td>{{ $device->psu1 }}</td>
											<td>{{ $device->psu2 }}</td>
											<td>{{ $device->upstream_device_id }}</td>
											<td>{{ $device->dl_util }}</td>
											<td>{{ $device->ul_util }}</td>
											<td>{{ $device->max_dl_util }}</td>
											<td>{{ $device->max_ul_util }}</td>
											<td>{{ $device->update_started }}</td>
											<td>{{ $device->previous_serial_nr }}</td>

                                            <td>
                                                <form action="{{ route('devices.destroy',$device->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('devices.show',$device->id) }}"><i class="fa fa-fw fa-eye"></i> Show</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('devices.edit',$device->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $devices->links() !!}
            </div>
        </div>
    </div>
@endsection
