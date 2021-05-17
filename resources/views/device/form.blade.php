<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('name') }}
            {{ Form::text('name', $device->name, ['class' => 'form-control' . ($errors->has('name') ? ' is-invalid' : ''), 'placeholder' => 'Name']) }}
            {!! $errors->first('name', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ip') }}
            {{ Form::text('ip', $device->ip, ['class' => 'form-control' . ($errors->has('ip') ? ' is-invalid' : ''), 'placeholder' => 'Ip']) }}
            {!! $errors->first('ip', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('temp') }}
            {{ Form::text('temp', $device->temp, ['class' => 'form-control' . ($errors->has('temp') ? ' is-invalid' : ''), 'placeholder' => 'Temp']) }}
            {!! $errors->first('temp', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cpu') }}
            {{ Form::text('cpu', $device->cpu, ['class' => 'form-control' . ($errors->has('cpu') ? ' is-invalid' : ''), 'placeholder' => 'Cpu']) }}
            {!! $errors->first('cpu', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('total_memory') }}
            {{ Form::text('total_memory', $device->total_memory, ['class' => 'form-control' . ($errors->has('total_memory') ? ' is-invalid' : ''), 'placeholder' => 'Total Memory']) }}
            {!! $errors->first('total_memory', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('free_memory') }}
            {{ Form::text('free_memory', $device->free_memory, ['class' => 'form-control' . ($errors->has('free_memory') ? ' is-invalid' : ''), 'placeholder' => 'Free Memory']) }}
            {!! $errors->first('free_memory', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('active_pppoe') }}
            {{ Form::text('active_pppoe', $device->active_pppoe, ['class' => 'form-control' . ($errors->has('active_pppoe') ? ' is-invalid' : ''), 'placeholder' => 'Active Pppoe']) }}
            {!! $errors->first('active_pppoe', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('maxactivepppoe') }}
            {{ Form::text('maxactivepppoe', $device->maxactivepppoe, ['class' => 'form-control' . ($errors->has('maxactivepppoe') ? ' is-invalid' : ''), 'placeholder' => 'Maxactivepppoe']) }}
            {!! $errors->first('maxactivepppoe', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('active_stations') }}
            {{ Form::text('active_stations', $device->active_stations, ['class' => 'form-control' . ($errors->has('active_stations') ? ' is-invalid' : ''), 'placeholder' => 'Active Stations']) }}
            {!! $errors->first('active_stations', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('max_active_stations') }}
            {{ Form::text('max_active_stations', $device->max_active_stations, ['class' => 'form-control' . ($errors->has('max_active_stations') ? ' is-invalid' : ''), 'placeholder' => 'Max Active Stations']) }}
            {!! $errors->first('max_active_stations', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('avg_ccq') }}
            {{ Form::text('avg_ccq', $device->avg_ccq, ['class' => 'form-control' . ($errors->has('avg_ccq') ? ' is-invalid' : ''), 'placeholder' => 'Avg Ccq']) }}
            {!! $errors->first('avg_ccq', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('volts') }}
            {{ Form::text('volts', $device->volts, ['class' => 'form-control' . ($errors->has('volts') ? ' is-invalid' : ''), 'placeholder' => 'Volts']) }}
            {!! $errors->first('volts', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('current') }}
            {{ Form::text('current', $device->current, ['class' => 'form-control' . ($errors->has('current') ? ' is-invalid' : ''), 'placeholder' => 'Current']) }}
            {!! $errors->first('current', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('soft') }}
            {{ Form::text('soft', $device->soft, ['class' => 'form-control' . ($errors->has('soft') ? ' is-invalid' : ''), 'placeholder' => 'Soft']) }}
            {!! $errors->first('soft', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('firm') }}
            {{ Form::text('firm', $device->firm, ['class' => 'form-control' . ($errors->has('firm') ? ' is-invalid' : ''), 'placeholder' => 'Firm']) }}
            {!! $errors->first('firm', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ping') }}
            {{ Form::text('ping', $device->ping, ['class' => 'form-control' . ($errors->has('ping') ? ' is-invalid' : ''), 'placeholder' => 'Ping']) }}
            {!! $errors->first('ping', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('downs_today') }}
            {{ Form::text('downs_today', $device->downs_today, ['class' => 'form-control' . ($errors->has('downs_today') ? ' is-invalid' : ''), 'placeholder' => 'Downs Today']) }}
            {!! $errors->first('downs_today', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('location_id') }}
            {{ Form::text('location_id', $device->location_id, ['class' => 'form-control' . ($errors->has('location_id') ? ' is-invalid' : ''), 'placeholder' => 'Location Id']) }}
            {!! $errors->first('location_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('devicetype_id') }}
            {{ Form::text('devicetype_id', $device->devicetype_id, ['class' => 'form-control' . ($errors->has('devicetype_id') ? ' is-invalid' : ''), 'placeholder' => 'Devicetype Id']) }}
            {!! $errors->first('devicetype_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('model') }}
            {{ Form::text('model', $device->model, ['class' => 'form-control' . ($errors->has('model') ? ' is-invalid' : ''), 'placeholder' => 'Model']) }}
            {!! $errors->first('model', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('uptime') }}
            {{ Form::text('uptime', $device->uptime, ['class' => 'form-control' . ($errors->has('uptime') ? ' is-invalid' : ''), 'placeholder' => 'Uptime']) }}
            {!! $errors->first('uptime', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('used_memory') }}
            {{ Form::text('used_memory', $device->used_memory, ['class' => 'form-control' . ($errors->has('used_memory') ? ' is-invalid' : ''), 'placeholder' => 'Used Memory']) }}
            {!! $errors->first('used_memory', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastseen') }}
            {{ Form::text('lastseen', $device->lastseen, ['class' => 'form-control' . ($errors->has('lastseen') ? ' is-invalid' : ''), 'placeholder' => 'Lastseen']) }}
            {!! $errors->first('lastseen', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastdown') }}
            {{ Form::text('lastdown', $device->lastdown, ['class' => 'form-control' . ($errors->has('lastdown') ? ' is-invalid' : ''), 'placeholder' => 'Lastdown']) }}
            {!! $errors->first('lastdown', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('serial_no') }}
            {{ Form::text('serial_no', $device->serial_no, ['class' => 'form-control' . ($errors->has('serial_no') ? ' is-invalid' : ''), 'placeholder' => 'Serial No']) }}
            {!! $errors->first('serial_no', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dftqueuesze') }}
            {{ Form::text('dftqueuesze', $device->dftqueuesze, ['class' => 'form-control' . ($errors->has('dftqueuesze') ? ' is-invalid' : ''), 'placeholder' => 'Dftqueuesze']) }}
            {!! $errors->first('dftqueuesze', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('channel') }}
            {{ Form::text('channel', $device->channel, ['class' => 'form-control' . ($errors->has('channel') ? ' is-invalid' : ''), 'placeholder' => 'Channel']) }}
            {!! $errors->first('channel', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('freq') }}
            {{ Form::text('freq', $device->freq, ['class' => 'form-control' . ($errors->has('freq') ? ' is-invalid' : ''), 'placeholder' => 'Freq']) }}
            {!! $errors->first('freq', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ssid') }}
            {{ Form::text('ssid', $device->ssid, ['class' => 'form-control' . ($errors->has('ssid') ? ' is-invalid' : ''), 'placeholder' => 'Ssid']) }}
            {!! $errors->first('ssid', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('log') }}
            {{ Form::text('log', $device->log, ['class' => 'form-control' . ($errors->has('log') ? ' is-invalid' : ''), 'placeholder' => 'Log']) }}
            {!! $errors->first('log', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('lastsnmpupdate') }}
            {{ Form::text('lastsnmpupdate', $device->lastsnmpupdate, ['class' => 'form-control' . ($errors->has('lastsnmpupdate') ? ' is-invalid' : ''), 'placeholder' => 'Lastsnmpupdate']) }}
            {!! $errors->first('lastsnmpupdate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pollstatus') }}
            {{ Form::text('pollstatus', $device->pollstatus, ['class' => 'form-control' . ($errors->has('pollstatus') ? ' is-invalid' : ''), 'placeholder' => 'Pollstatus']) }}
            {!! $errors->first('pollstatus', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ping1') }}
            {{ Form::text('ping1', $device->ping1, ['class' => 'form-control' . ($errors->has('ping1') ? ' is-invalid' : ''), 'placeholder' => 'Ping1']) }}
            {!! $errors->first('ping1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ping2') }}
            {{ Form::text('ping2', $device->ping2, ['class' => 'form-control' . ($errors->has('ping2') ? ' is-invalid' : ''), 'placeholder' => 'Ping2']) }}
            {!! $errors->first('ping2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ping3') }}
            {{ Form::text('ping3', $device->ping3, ['class' => 'form-control' . ($errors->has('ping3') ? ' is-invalid' : ''), 'placeholder' => 'Ping3']) }}
            {!! $errors->first('ping3', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('txpower') }}
            {{ Form::text('txpower', $device->txpower, ['class' => 'form-control' . ($errors->has('txpower') ? ' is-invalid' : ''), 'placeholder' => 'Txpower']) }}
            {!! $errors->first('txpower', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('wds') }}
            {{ Form::text('wds', $device->wds, ['class' => 'form-control' . ($errors->has('wds') ? ' is-invalid' : ''), 'placeholder' => 'Wds']) }}
            {!! $errors->first('wds', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('airmaxq') }}
            {{ Form::text('airmaxq', $device->airmaxq, ['class' => 'form-control' . ($errors->has('airmaxq') ? ' is-invalid' : ''), 'placeholder' => 'Airmaxq']) }}
            {!! $errors->first('airmaxq', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('airmaxc') }}
            {{ Form::text('airmaxc', $device->airmaxc, ['class' => 'form-control' . ($errors->has('airmaxc') ? ' is-invalid' : ''), 'placeholder' => 'Airmaxc']) }}
            {!! $errors->first('airmaxc', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('mikrotik_file_exists') }}
            {{ Form::text('mikrotik_file_exists', $device->mikrotik_file_exists, ['class' => 'form-control' . ($errors->has('mikrotik_file_exists') ? ' is-invalid' : ''), 'placeholder' => 'Mikrotik File Exists']) }}
            {!! $errors->first('mikrotik_file_exists', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sch_update') }}
            {{ Form::text('sch_update', $device->sch_update, ['class' => 'form-control' . ($errors->has('sch_update') ? ' is-invalid' : ''), 'placeholder' => 'Sch Update']) }}
            {!! $errors->first('sch_update', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dns_server') }}
            {{ Form::text('dns_server', $device->dns_server, ['class' => 'form-control' . ($errors->has('dns_server') ? ' is-invalid' : ''), 'placeholder' => 'Dns Server']) }}
            {!! $errors->first('dns_server', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fault_description') }}
            {{ Form::text('fault_description', $device->fault_description, ['class' => 'form-control' . ($errors->has('fault_description') ? ' is-invalid' : ''), 'placeholder' => 'Fault Description']) }}
            {!! $errors->first('fault_description', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('backed_up') }}
            {{ Form::text('backed_up', $device->backed_up, ['class' => 'form-control' . ($errors->has('backed_up') ? ' is-invalid' : ''), 'placeholder' => 'Backed Up']) }}
            {!! $errors->first('backed_up', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('date_backed_up') }}
            {{ Form::text('date_backed_up', $device->date_backed_up, ['class' => 'form-control' . ($errors->has('date_backed_up') ? ' is-invalid' : ''), 'placeholder' => 'Date Backed Up']) }}
            {!! $errors->first('date_backed_up', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('as_number') }}
            {{ Form::text('as_number', $device->as_number, ['class' => 'form-control' . ($errors->has('as_number') ? ' is-invalid' : ''), 'placeholder' => 'As Number']) }}
            {!! $errors->first('as_number', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('acknowledged') }}
            {{ Form::text('acknowledged', $device->acknowledged, ['class' => 'form-control' . ($errors->has('acknowledged') ? ' is-invalid' : ''), 'placeholder' => 'Acknowledged']) }}
            {!! $errors->first('acknowledged', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('default_gateway') }}
            {{ Form::text('default_gateway', $device->default_gateway, ['class' => 'form-control' . ($errors->has('default_gateway') ? ' is-invalid' : ''), 'placeholder' => 'Default Gateway']) }}
            {!! $errors->first('default_gateway', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('default_gateway_id') }}
            {{ Form::text('default_gateway_id', $device->default_gateway_id, ['class' => 'form-control' . ($errors->has('default_gateway_id') ? ' is-invalid' : ''), 'placeholder' => 'Default Gateway Id']) }}
            {!! $errors->first('default_gateway_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('txrate') }}
            {{ Form::text('txrate', $device->txrate, ['class' => 'form-control' . ($errors->has('txrate') ? ' is-invalid' : ''), 'placeholder' => 'Txrate']) }}
            {!! $errors->first('txrate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rxrate') }}
            {{ Form::text('rxrate', $device->rxrate, ['class' => 'form-control' . ($errors->has('rxrate') ? ' is-invalid' : ''), 'placeholder' => 'Rxrate']) }}
            {!! $errors->first('rxrate', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('txsignal') }}
            {{ Form::text('txsignal', $device->txsignal, ['class' => 'form-control' . ($errors->has('txsignal') ? ' is-invalid' : ''), 'placeholder' => 'Txsignal']) }}
            {!! $errors->first('txsignal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rxsignal') }}
            {{ Form::text('rxsignal', $device->rxsignal, ['class' => 'form-control' . ($errors->has('rxsignal') ? ' is-invalid' : ''), 'placeholder' => 'Rxsignal']) }}
            {!! $errors->first('rxsignal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('sstp_server') }}
            {{ Form::text('sstp_server', $device->sstp_server, ['class' => 'form-control' . ($errors->has('sstp_server') ? ' is-invalid' : ''), 'placeholder' => 'Sstp Server']) }}
            {!! $errors->first('sstp_server', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('pptp_server') }}
            {{ Form::text('pptp_server', $device->pptp_server, ['class' => 'form-control' . ($errors->has('pptp_server') ? ' is-invalid' : ''), 'placeholder' => 'Pptp Server']) }}
            {!! $errors->first('pptp_server', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('l2tp_server') }}
            {{ Form::text('l2tp_server', $device->l2tp_server, ['class' => 'form-control' . ($errors->has('l2tp_server') ? ' is-invalid' : ''), 'placeholder' => 'L2Tp Server']) }}
            {!! $errors->first('l2tp_server', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ovpn_server') }}
            {{ Form::text('ovpn_server', $device->ovpn_server, ['class' => 'form-control' . ($errors->has('ovpn_server') ? ' is-invalid' : ''), 'placeholder' => 'Ovpn Server']) }}
            {!! $errors->first('ovpn_server', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('queue_count') }}
            {{ Form::text('queue_count', $device->queue_count, ['class' => 'form-control' . ($errors->has('queue_count') ? ' is-invalid' : ''), 'placeholder' => 'Queue Count']) }}
            {!! $errors->first('queue_count', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('max_active_hotspot') }}
            {{ Form::text('max_active_hotspot', $device->max_active_hotspot, ['class' => 'form-control' . ($errors->has('max_active_hotspot') ? ' is-invalid' : ''), 'placeholder' => 'Max Active Hotspot']) }}
            {!! $errors->first('max_active_hotspot', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('active_hotspot') }}
            {{ Form::text('active_hotspot', $device->active_hotspot, ['class' => 'form-control' . ($errors->has('active_hotspot') ? ' is-invalid' : ''), 'placeholder' => 'Active Hotspot']) }}
            {!! $errors->first('active_hotspot', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('voltage_monitor') }}
            {{ Form::text('voltage_monitor', $device->voltage_monitor, ['class' => 'form-control' . ($errors->has('voltage_monitor') ? ' is-invalid' : ''), 'placeholder' => 'Voltage Monitor']) }}
            {!! $errors->first('voltage_monitor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('voltage_threshold') }}
            {{ Form::text('voltage_threshold', $device->voltage_threshold, ['class' => 'form-control' . ($errors->has('voltage_threshold') ? ' is-invalid' : ''), 'placeholder' => 'Voltage Threshold']) }}
            {!! $errors->first('voltage_threshold', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('voltage_seen_at') }}
            {{ Form::text('voltage_seen_at', $device->voltage_seen_at, ['class' => 'form-control' . ($errors->has('voltage_seen_at') ? ' is-invalid' : ''), 'placeholder' => 'Voltage Seen At']) }}
            {!! $errors->first('voltage_seen_at', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ping4') }}
            {{ Form::text('ping4', $device->ping4, ['class' => 'form-control' . ($errors->has('ping4') ? ' is-invalid' : ''), 'placeholder' => 'Ping4']) }}
            {!! $errors->first('ping4', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('comment') }}
            {{ Form::text('comment', $device->comment, ['class' => 'form-control' . ($errors->has('comment') ? ' is-invalid' : ''), 'placeholder' => 'Comment']) }}
            {!! $errors->first('comment', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('voltage_offset') }}
            {{ Form::text('voltage_offset', $device->voltage_offset, ['class' => 'form-control' . ($errors->has('voltage_offset') ? ' is-invalid' : ''), 'placeholder' => 'Voltage Offset']) }}
            {!! $errors->first('voltage_offset', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('solar_charge') }}
            {{ Form::text('solar_charge', $device->solar_charge, ['class' => 'form-control' . ($errors->has('solar_charge') ? ' is-invalid' : ''), 'placeholder' => 'Solar Charge']) }}
            {!! $errors->first('solar_charge', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('batt1') }}
            {{ Form::text('batt1', $device->batt1, ['class' => 'form-control' . ($errors->has('batt1') ? ' is-invalid' : ''), 'placeholder' => 'Batt1']) }}
            {!! $errors->first('batt1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('batt2') }}
            {{ Form::text('batt2', $device->batt2, ['class' => 'form-control' . ($errors->has('batt2') ? ' is-invalid' : ''), 'placeholder' => 'Batt2']) }}
            {!! $errors->first('batt2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('batt3') }}
            {{ Form::text('batt3', $device->batt3, ['class' => 'form-control' . ($errors->has('batt3') ? ' is-invalid' : ''), 'placeholder' => 'Batt3']) }}
            {!! $errors->first('batt3', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('batt4') }}
            {{ Form::text('batt4', $device->batt4, ['class' => 'form-control' . ($errors->has('batt4') ? ' is-invalid' : ''), 'placeholder' => 'Batt4']) }}
            {!! $errors->first('batt4', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('poll_enabled') }}
            {{ Form::text('poll_enabled', $device->poll_enabled, ['class' => 'form-control' . ($errors->has('poll_enabled') ? ' is-invalid' : ''), 'placeholder' => 'Poll Enabled']) }}
            {!! $errors->first('poll_enabled', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('admin_password') }}
            {{ Form::text('admin_password', $device->admin_password, ['class' => 'form-control' . ($errors->has('admin_password') ? ' is-invalid' : ''), 'placeholder' => 'Admin Password']) }}
            {!! $errors->first('admin_password', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('admin_password_set_at') }}
            {{ Form::text('admin_password_set_at', $device->admin_password_set_at, ['class' => 'form-control' . ($errors->has('admin_password_set_at') ? ' is-invalid' : ''), 'placeholder' => 'Admin Password Set At']) }}
            {!! $errors->first('admin_password_set_at', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('noise_floor') }}
            {{ Form::text('noise_floor', $device->noise_floor, ['class' => 'form-control' . ($errors->has('noise_floor') ? ' is-invalid' : ''), 'placeholder' => 'Noise Floor']) }}
            {!! $errors->first('noise_floor', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('signal') }}
            {{ Form::text('signal', $device->signal, ['class' => 'form-control' . ($errors->has('signal') ? ' is-invalid' : ''), 'placeholder' => 'Signal']) }}
            {!! $errors->first('signal', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('txfreq') }}
            {{ Form::text('txfreq', $device->txfreq, ['class' => 'form-control' . ($errors->has('txfreq') ? ' is-invalid' : ''), 'placeholder' => 'Txfreq']) }}
            {!! $errors->first('txfreq', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('rxfreq') }}
            {{ Form::text('rxfreq', $device->rxfreq, ['class' => 'form-control' . ($errors->has('rxfreq') ? ' is-invalid' : ''), 'placeholder' => 'Rxfreq']) }}
            {!! $errors->first('rxfreq', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('qam') }}
            {{ Form::text('qam', $device->qam, ['class' => 'form-control' . ($errors->has('qam') ? ' is-invalid' : ''), 'placeholder' => 'Qam']) }}
            {!! $errors->first('qam', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('wireless_mode') }}
            {{ Form::text('wireless_mode', $device->wireless_mode, ['class' => 'form-control' . ($errors->has('wireless_mode') ? ' is-invalid' : ''), 'placeholder' => 'Wireless Mode']) }}
            {!! $errors->first('wireless_mode', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('signal1') }}
            {{ Form::text('signal1', $device->signal1, ['class' => 'form-control' . ($errors->has('signal1') ? ' is-invalid' : ''), 'placeholder' => 'Signal1']) }}
            {!! $errors->first('signal1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('signal2') }}
            {{ Form::text('signal2', $device->signal2, ['class' => 'form-control' . ($errors->has('signal2') ? ' is-invalid' : ''), 'placeholder' => 'Signal2']) }}
            {!! $errors->first('signal2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('md5_username') }}
            {{ Form::text('md5_username', $device->md5_username, ['class' => 'form-control' . ($errors->has('md5_username') ? ' is-invalid' : ''), 'placeholder' => 'Md5 Username']) }}
            {!! $errors->first('md5_username', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('md5_password') }}
            {{ Form::text('md5_password', $device->md5_password, ['class' => 'form-control' . ($errors->has('md5_password') ? ' is-invalid' : ''), 'placeholder' => 'Md5 Password']) }}
            {!! $errors->first('md5_password', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('antenna_id') }}
            {{ Form::text('antenna_id', $device->antenna_id, ['class' => 'form-control' . ($errors->has('antenna_id') ? ' is-invalid' : ''), 'placeholder' => 'Antenna Id']) }}
            {!! $errors->first('antenna_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('antenna_heading') }}
            {{ Form::text('antenna_heading', $device->antenna_heading, ['class' => 'form-control' . ($errors->has('antenna_heading') ? ' is-invalid' : ''), 'placeholder' => 'Antenna Heading']) }}
            {!! $errors->first('antenna_heading', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('antenna_tilt') }}
            {{ Form::text('antenna_tilt', $device->antenna_tilt, ['class' => 'form-control' . ($errors->has('antenna_tilt') ? ' is-invalid' : ''), 'placeholder' => 'Antenna Tilt']) }}
            {!! $errors->first('antenna_tilt', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ftp_port') }}
            {{ Form::text('ftp_port', $device->ftp_port, ['class' => 'form-control' . ($errors->has('ftp_port') ? ' is-invalid' : ''), 'placeholder' => 'Ftp Port']) }}
            {!! $errors->first('ftp_port', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('api_port') }}
            {{ Form::text('api_port', $device->api_port, ['class' => 'form-control' . ($errors->has('api_port') ? ' is-invalid' : ''), 'placeholder' => 'Api Port']) }}
            {!! $errors->first('api_port', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ssh_port') }}
            {{ Form::text('ssh_port', $device->ssh_port, ['class' => 'form-control' . ($errors->has('ssh_port') ? ' is-invalid' : ''), 'placeholder' => 'Ssh Port']) }}
            {!! $errors->first('ssh_port', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('http_port') }}
            {{ Form::text('http_port', $device->http_port, ['class' => 'form-control' . ($errors->has('http_port') ? ' is-invalid' : ''), 'placeholder' => 'Http Port']) }}
            {!! $errors->first('http_port', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('winbox_port') }}
            {{ Form::text('winbox_port', $device->winbox_port, ['class' => 'form-control' . ($errors->has('winbox_port') ? ' is-invalid' : ''), 'placeholder' => 'Winbox Port']) }}
            {!! $errors->first('winbox_port', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('telnet_port') }}
            {{ Form::text('telnet_port', $device->telnet_port, ['class' => 'form-control' . ($errors->has('telnet_port') ? ' is-invalid' : ''), 'placeholder' => 'Telnet Port']) }}
            {!! $errors->first('telnet_port', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('license_1') }}
            {{ Form::text('license_1', $device->license_1, ['class' => 'form-control' . ($errors->has('license_1') ? ' is-invalid' : ''), 'placeholder' => 'License 1']) }}
            {!! $errors->first('license_1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('license_2') }}
            {{ Form::text('license_2', $device->license_2, ['class' => 'form-control' . ($errors->has('license_2') ? ' is-invalid' : ''), 'placeholder' => 'License 2']) }}
            {!! $errors->first('license_2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_download_test') }}
            {{ Form::text('last_download_test', $device->last_download_test, ['class' => 'form-control' . ($errors->has('last_download_test') ? ' is-invalid' : ''), 'placeholder' => 'Last Download Test']) }}
            {!! $errors->first('last_download_test', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_upload_test') }}
            {{ Form::text('last_upload_test', $device->last_upload_test, ['class' => 'form-control' . ($errors->has('last_upload_test') ? ' is-invalid' : ''), 'placeholder' => 'Last Upload Test']) }}
            {!! $errors->first('last_upload_test', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('last_speed_time') }}
            {{ Form::text('last_speed_time', $device->last_speed_time, ['class' => 'form-control' . ($errors->has('last_speed_time') ? ' is-invalid' : ''), 'placeholder' => 'Last Speed Time']) }}
            {!! $errors->first('last_speed_time', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('snmp_community') }}
            {{ Form::text('snmp_community', $device->snmp_community, ['class' => 'form-control' . ($errors->has('snmp_community') ? ' is-invalid' : ''), 'placeholder' => 'Snmp Community']) }}
            {!! $errors->first('snmp_community', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('include_interfaces') }}
            {{ Form::text('include_interfaces', $device->include_interfaces, ['class' => 'form-control' . ($errors->has('include_interfaces') ? ' is-invalid' : ''), 'placeholder' => 'Include Interfaces']) }}
            {!! $errors->first('include_interfaces', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('psu1') }}
            {{ Form::text('psu1', $device->psu1, ['class' => 'form-control' . ($errors->has('psu1') ? ' is-invalid' : ''), 'placeholder' => 'Psu1']) }}
            {!! $errors->first('psu1', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('psu2') }}
            {{ Form::text('psu2', $device->psu2, ['class' => 'form-control' . ($errors->has('psu2') ? ' is-invalid' : ''), 'placeholder' => 'Psu2']) }}
            {!! $errors->first('psu2', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('upstream_device_id') }}
            {{ Form::text('upstream_device_id', $device->upstream_device_id, ['class' => 'form-control' . ($errors->has('upstream_device_id') ? ' is-invalid' : ''), 'placeholder' => 'Upstream Device Id']) }}
            {!! $errors->first('upstream_device_id', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('dl_util') }}
            {{ Form::text('dl_util', $device->dl_util, ['class' => 'form-control' . ($errors->has('dl_util') ? ' is-invalid' : ''), 'placeholder' => 'Dl Util']) }}
            {!! $errors->first('dl_util', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('ul_util') }}
            {{ Form::text('ul_util', $device->ul_util, ['class' => 'form-control' . ($errors->has('ul_util') ? ' is-invalid' : ''), 'placeholder' => 'Ul Util']) }}
            {!! $errors->first('ul_util', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('max_dl_util') }}
            {{ Form::text('max_dl_util', $device->max_dl_util, ['class' => 'form-control' . ($errors->has('max_dl_util') ? ' is-invalid' : ''), 'placeholder' => 'Max Dl Util']) }}
            {!! $errors->first('max_dl_util', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('max_ul_util') }}
            {{ Form::text('max_ul_util', $device->max_ul_util, ['class' => 'form-control' . ($errors->has('max_ul_util') ? ' is-invalid' : ''), 'placeholder' => 'Max Ul Util']) }}
            {!! $errors->first('max_ul_util', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('update_started') }}
            {{ Form::text('update_started', $device->update_started, ['class' => 'form-control' . ($errors->has('update_started') ? ' is-invalid' : ''), 'placeholder' => 'Update Started']) }}
            {!! $errors->first('update_started', '<div class="invalid-feedback">:message</p>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('previous_serial_nr') }}
            {{ Form::text('previous_serial_nr', $device->previous_serial_nr, ['class' => 'form-control' . ($errors->has('previous_serial_nr') ? ' is-invalid' : ''), 'placeholder' => 'Previous Serial Nr']) }}
            {!! $errors->first('previous_serial_nr', '<div class="invalid-feedback">:message</p>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>