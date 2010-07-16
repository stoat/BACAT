<html>
<head>
<title>Welcome to CodeIgniter</title>

<style type="text/css">

body {
 background-color: #fff;
 margin: 40px;
 font-family: Lucida Grande, Verdana, Sans-serif;
 font-size: 14px;
 color: #4F5155;
}

a {
 color: #003399;
 background-color: transparent;
 font-weight: normal;
}

h1 {
 color: #444;
 background-color: transparent;
 border-bottom: 1px solid #D0D0D0;
 font-size: 16px;
 font-weight: bold;
 margin: 24px 0 2px 0;
 padding: 5px 0 6px 0;
}

code {
 font-family: Monaco, Verdana, Sans-serif;
 font-size: 12px;
 background-color: #f9f9f9;
 border: 1px solid #D0D0D0;
 color: #002166;
 display: block;
 margin: 14px 0 14px 0;
 padding: 12px 10px 12px 10px;
}

</style>
<script src="assets/ext-3.2.1/ext-all-debug.js"></script>
<script type="text/javascript">
 Ext.onReady(function(){
MyPanelUi = Ext.extend(Ext.Panel, {
    title: 'My Panel',
    width: 482,
    height: 366,
    initComponent: function() {
        this.items = [
            {
                xtype: 'form',
                title: 'My Form',
                labelWidth: 100,
                labelAlign: 'left',
                layout: 'form',
                items: [
                    {
                        xtype: 'textfield',
                        fieldLabel: 'Trail Name',
                        anchor: '100%'
                    },
                    {
                        xtype: 'datefield',
                        fieldLabel: 'From',
                        anchor: '100%'
                    },
                    {
                        xtype: 'datefield',
                        fieldLabel: 'To',
                        anchor: '100%'
                    }
                ]
            },
            {
                xtype: 'tabpanel',
                activeTab: 4,
                items: [
                    {
                        xtype: 'panel',
                        title: 'Gardens',
                        items: [
                            {
                                xtype: 'editorgrid',
                                title: 'Contacts',
                                width: 481,
                                height: 170,
                                columns: [
                                    {
                                        xtype: 'gridcolumn',
                                        header: 'Column',
                                        sortable: true,
                                        resizable: true,
                                        width: 100,
                                        dataIndex: 'string',
                                        editor: {
                                            xtype: 'textfield',
                                            fieldLabel: 'Label'
                                        }
                                    },
                                    {
                                        xtype: 'gridcolumn',
                                        header: 'Column',
                                        sortable: true,
                                        resizable: true,
                                        width: 100,
                                        dataIndex: 'string',
                                        editor: {
                                            xtype: 'textfield',
                                            fieldLabel: 'Label'
                                        }
                                    },
                                    {
                                        xtype: 'gridcolumn',
                                        header: 'Column',
                                        sortable: true,
                                        resizable: true,
                                        width: 100,
                                        dataIndex: 'string',
                                        editor: {
                                            xtype: 'textfield',
                                            fieldLabel: 'Label'
                                        }
                                    }
                                ]
                            }
                        ]
                    },
                    {
                        xtype: 'panel',
                        title: 'Artists'
                    },
                    {
                        xtype: 'panel',
                        title: 'Exhibits'
                    },
                    {
                        xtype: 'panel',
                        title: 'Projects'
                    },
                    {
                        xtype: 'panel',
                        title: 'Organiser Contacts'
                    }
                ]
            }
        ];
        MyPanelUi.superclass.initComponent.call(this);
    }
})
});

</script>
</head>
<body>

    <div id="center">
    </div>
<p><br />Page rendered in {elapsed_time} seconds</p>

</body>
</html>