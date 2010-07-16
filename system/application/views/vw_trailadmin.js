/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


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
});
