@extends('layouts.app')

@section('template_title')
    {{ $device->name ?? 'Show Device' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Device</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('devices.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $device->name }}
                        </div>
                        <div class="form-group">
                            <strong>Ip:</strong>
                            {{ $device->ip }}
                        </div>
                        <div class="form-group">
                            <strong>Temp:</strong>
                            {{ $device->temp }}
                        </div>
                        <div class="form-group">
                            <strong>Cpu:</strong>
                            {{ $device->cpu }}
                        </div>
                        <div class="form-group">
                            <strong>Total Memory:</strong>
                            {{ $device->total_memory }}
                        </div>
                        <div class="form-group">
                            <strong>Free Memory:</strong>
                            {{ $device->free_memory }}
                        </div>
                        <div class="form-group">
                            <strong>Active Pppoe:</strong>
                            {{ $device->active_pppoe }}
                        </div>
                        <div class="form-group">
                            <strong>Maxactivepppoe:</strong>
                            {{ $device->maxactivepppoe }}
                        </div>
                        <div class="form-group">
                            <strong>Active Stations:</strong>
                            {{ $device->active_stations }}
                        </div>
                        <div class="form-group">
                            <strong>Max Active Stations:</strong>
                            {{ $device->max_active_stations }}
                        </div>
                        <div class="form-group">
                            <strong>Avg Ccq:</strong>
                            {{ $device->avg_ccq }}
                        </div>
                        <div class="form-group">
                            <strong>Volts:</strong>
                            {{ $device->volts }}
                        </div>
                        <div class="form-group">
                            <strong>Current:</strong>
                            {{ $device->current }}
                        </div>
                        <div class="form-group">
                            <strong>Soft:</strong>
                            {{ $device->soft }}
                        </div>
                        <div class="form-group">
                            <strong>Firm:</strong>
                            {{ $device->firm }}
                        </div>
                        <div class="form-group">
                            <strong>Ping:</strong>
                            {{ $device->ping }}
                        </div>
                        <div class="form-group">
                            <strong>Downs Today:</strong>
                            {{ $device->downs_today }}
                        </div>
                        <div class="form-group">
                            <strong>Location Id:</strong>
                            {{ $device->location_id }}
                        </div>
                        <div class="form-group">
                            <strong>Devicetype Id:</strong>
                            {{ $device->devicetype_id }}
                        </div>
                        <div class="form-group">
                            <strong>Model:</strong>
                            {{ $device->model }}
                        </div>
                        <div class="form-group">
                            <strong>Uptime:</strong>
                            {{ $device->uptime }}
                        </div>
                        <div class="form-group">
                            <strong>Used Memory:</strong>
                            {{ $device->used_memory }}
                        </div>
                        <div class="form-group">
                            <strong>Lastseen:</strong>
                            {{ $device->lastseen }}
                        </div>
                        <div class="form-group">
                            <strong>Lastdown:</strong>
                            {{ $device->lastdown }}
                        </div>
                        <div class="form-group">
                            <strong>Serial No:</strong>
                            {{ $device->serial_no }}
                        </div>
                        <div class="form-group">
                            <strong>Dftqueuesze:</strong>
                            {{ $device->dftqueuesze }}
                        </div>
                        <div class="form-group">
                            <strong>Channel:</strong>
                            {{ $device->channel }}
                        </div>
                        <div class="form-group">
                            <strong>Freq:</strong>
                            {{ $device->freq }}
                        </div>
                        <div class="form-group">
                            <strong>Ssid:</strong>
                            {{ $device->ssid }}
                        </div>
                        <div class="form-group">
                            <strong>Log:</strong>
                            {{ $device->log }}
                        </div>
                        <div class="form-group">
                            <strong>Lastsnmpupdate:</strong>
                            {{ $device->lastsnmpupdate }}
                        </div>
                        <div class="form-group">
                            <strong>Pollstatus:</strong>
                            {{ $device->pollstatus }}
                        </div>
                        <div class="form-group">
                            <strong>Ping1:</strong>
                            {{ $device->ping1 }}
                        </div>
                        <div class="form-group">
                            <strong>Ping2:</strong>
                            {{ $device->ping2 }}
                        </div>
                        <div class="form-group">
                            <strong>Ping3:</strong>
                            {{ $device->ping3 }}
                        </div>
                        <div class="form-group">
                            <strong>Txpower:</strong>
                            {{ $device->txpower }}
                        </div>
                        <div class="form-group">
                            <strong>Wds:</strong>
                            {{ $device->wds }}
                        </div>
                        <div class="form-group">
                            <strong>Airmaxq:</strong>
                            {{ $device->airmaxq }}
                        </div>
                        <div class="form-group">
                            <strong>Airmaxc:</strong>
                            {{ $device->airmaxc }}
                        </div>
                        <div class="form-group">
                            <strong>Mikrotik File Exists:</strong>
                            {{ $device->mikrotik_file_exists }}
                        </div>
                        <div class="form-group">
                            <strong>Sch Update:</strong>
                            {{ $device->sch_update }}
                        </div>
                        <div class="form-group">
                            <strong>Dns Server:</strong>
                            {{ $device->dns_server }}
                        </div>
                        <div class="form-group">
                            <strong>Fault Description:</strong>
                            {{ $device->fault_description }}
                        </div>
                        <div class="form-group">
                            <strong>Backed Up:</strong>
                            {{ $device->backed_up }}
                        </div>
                        <div class="form-group">
                            <strong>Date Backed Up:</strong>
                            {{ $device->date_backed_up }}
                        </div>
                        <div class="form-group">
                            <strong>As Number:</strong>
                            {{ $device->as_number }}
                        </div>
                        <div class="form-group">
                            <strong>Acknowledged:</strong>
                            {{ $device->acknowledged }}
                        </div>
                        <div class="form-group">
                            <strong>Default Gateway:</strong>
                            {{ $device->default_gateway }}
                        </div>
                        <div class="form-group">
                            <strong>Default Gateway Id:</strong>
                            {{ $device->default_gateway_id }}
                        </div>
                        <div class="form-group">
                            <strong>Txrate:</strong>
                            {{ $device->txrate }}
                        </div>
                        <div class="form-group">
                            <strong>Rxrate:</strong>
                            {{ $device->rxrate }}
                        </div>
                        <div class="form-group">
                            <strong>Txsignal:</strong>
                            {{ $device->txsignal }}
                        </div>
                        <div class="form-group">
                            <strong>Rxsignal:</strong>
                            {{ $device->rxsignal }}
                        </div>
                        <div class="form-group">
                            <strong>Sstp Server:</strong>
                            {{ $device->sstp_server }}
                        </div>
                        <div class="form-group">
                            <strong>Pptp Server:</strong>
                            {{ $device->pptp_server }}
                        </div>
                        <div class="form-group">
                            <strong>L2Tp Server:</strong>
                            {{ $device->l2tp_server }}
                        </div>
                        <div class="form-group">
                            <strong>Ovpn Server:</strong>
                            {{ $device->ovpn_server }}
                        </div>
                        <div class="form-group">
                            <strong>Queue Count:</strong>
                            {{ $device->queue_count }}
                        </div>
                        <div class="form-group">
                            <strong>Max Active Hotspot:</strong>
                            {{ $device->max_active_hotspot }}
                        </div>
                        <div class="form-group">
                            <strong>Active Hotspot:</strong>
                            {{ $device->active_hotspot }}
                        </div>
                        <div class="form-group">
                            <strong>Voltage Monitor:</strong>
                            {{ $device->voltage_monitor }}
                        </div>
                        <div class="form-group">
                            <strong>Voltage Threshold:</strong>
                            {{ $device->voltage_threshold }}
                        </div>
                        <div class="form-group">
                            <strong>Voltage Seen At:</strong>
                            {{ $device->voltage_seen_at }}
                        </div>
                        <div class="form-group">
                            <strong>Ping4:</strong>
                            {{ $device->ping4 }}
                        </div>
                        <div class="form-group">
                            <strong>Comment:</strong>
                            {{ $device->comment }}
                        </div>
                        <div class="form-group">
                            <strong>Voltage Offset:</strong>
                            {{ $device->voltage_offset }}
                        </div>
                        <div class="form-group">
                            <strong>Solar Charge:</strong>
                            {{ $device->solar_charge }}
                        </div>
                        <div class="form-group">
                            <strong>Batt1:</strong>
                            {{ $device->batt1 }}
                        </div>
                        <div class="form-group">
                            <strong>Batt2:</strong>
                            {{ $device->batt2 }}
                        </div>
                        <div class="form-group">
                            <strong>Batt3:</strong>
                            {{ $device->batt3 }}
                        </div>
                        <div class="form-group">
                            <strong>Batt4:</strong>
                            {{ $device->batt4 }}
                        </div>
                        <div class="form-group">
                            <strong>Poll Enabled:</strong>
                            {{ $device->poll_enabled }}
                        </div>
                        <div class="form-group">
                            <strong>Admin Password:</strong>
                            {{ $device->admin_password }}
                        </div>
                        <div class="form-group">
                            <strong>Admin Password Set At:</strong>
                            {{ $device->admin_password_set_at }}
                        </div>
                        <div class="form-group">
                            <strong>Noise Floor:</strong>
                            {{ $device->noise_floor }}
                        </div>
                        <div class="form-group">
                            <strong>Signal:</strong>
                            {{ $device->signal }}
                        </div>
                        <div class="form-group">
                            <strong>Txfreq:</strong>
                            {{ $device->txfreq }}
                        </div>
                        <div class="form-group">
                            <strong>Rxfreq:</strong>
                            {{ $device->rxfreq }}
                        </div>
                        <div class="form-group">
                            <strong>Qam:</strong>
                            {{ $device->qam }}
                        </div>
                        <div class="form-group">
                            <strong>Wireless Mode:</strong>
                            {{ $device->wireless_mode }}
                        </div>
                        <div class="form-group">
                            <strong>Signal1:</strong>
                            {{ $device->signal1 }}
                        </div>
                        <div class="form-group">
                            <strong>Signal2:</strong>
                            {{ $device->signal2 }}
                        </div>
                        <div class="form-group">
                            <strong>Md5 Username:</strong>
                            {{ $device->md5_username }}
                        </div>
                        <div class="form-group">
                            <strong>Md5 Password:</strong>
                            {{ $device->md5_password }}
                        </div>
                        <div class="form-group">
                            <strong>Antenna Id:</strong>
                            {{ $device->antenna_id }}
                        </div>
                        <div class="form-group">
                            <strong>Antenna Heading:</strong>
                            {{ $device->antenna_heading }}
                        </div>
                        <div class="form-group">
                            <strong>Antenna Tilt:</strong>
                            {{ $device->antenna_tilt }}
                        </div>
                        <div class="form-group">
                            <strong>Ftp Port:</strong>
                            {{ $device->ftp_port }}
                        </div>
                        <div class="form-group">
                            <strong>Api Port:</strong>
                            {{ $device->api_port }}
                        </div>
                        <div class="form-group">
                            <strong>Ssh Port:</strong>
                            {{ $device->ssh_port }}
                        </div>
                        <div class="form-group">
                            <strong>Http Port:</strong>
                            {{ $device->http_port }}
                        </div>
                        <div class="form-group">
                            <strong>Winbox Port:</strong>
                            {{ $device->winbox_port }}
                        </div>
                        <div class="form-group">
                            <strong>Telnet Port:</strong>
                            {{ $device->telnet_port }}
                        </div>
                        <div class="form-group">
                            <strong>License 1:</strong>
                            {{ $device->license_1 }}
                        </div>
                        <div class="form-group">
                            <strong>License 2:</strong>
                            {{ $device->license_2 }}
                        </div>
                        <div class="form-group">
                            <strong>Last Download Test:</strong>
                            {{ $device->last_download_test }}
                        </div>
                        <div class="form-group">
                            <strong>Last Upload Test:</strong>
                            {{ $device->last_upload_test }}
                        </div>
                        <div class="form-group">
                            <strong>Last Speed Time:</strong>
                            {{ $device->last_speed_time }}
                        </div>
                        <div class="form-group">
                            <strong>Snmp Community:</strong>
                            {{ $device->snmp_community }}
                        </div>
                        <div class="form-group">
                            <strong>Include Interfaces:</strong>
                            {{ $device->include_interfaces }}
                        </div>
                        <div class="form-group">
                            <strong>Psu1:</strong>
                            {{ $device->psu1 }}
                        </div>
                        <div class="form-group">
                            <strong>Psu2:</strong>
                            {{ $device->psu2 }}
                        </div>
                        <div class="form-group">
                            <strong>Upstream Device Id:</strong>
                            {{ $device->upstream_device_id }}
                        </div>
                        <div class="form-group">
                            <strong>Dl Util:</strong>
                            {{ $device->dl_util }}
                        </div>
                        <div class="form-group">
                            <strong>Ul Util:</strong>
                            {{ $device->ul_util }}
                        </div>
                        <div class="form-group">
                            <strong>Max Dl Util:</strong>
                            {{ $device->max_dl_util }}
                        </div>
                        <div class="form-group">
                            <strong>Max Ul Util:</strong>
                            {{ $device->max_ul_util }}
                        </div>
                        <div class="form-group">
                            <strong>Update Started:</strong>
                            {{ $device->update_started }}
                        </div>
                        <div class="form-group">
                            <strong>Previous Serial Nr:</strong>
                            {{ $device->previous_serial_nr }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
