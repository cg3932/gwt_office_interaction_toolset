package com.mycompany.client;

import com.google.gwt.core.client.EntryPoint;
import com.google.gwt.event.dom.client.ClickEvent;
import com.google.gwt.event.dom.client.ClickHandler;
import com.google.gwt.user.client.Window;
import com.google.gwt.user.client.ui.Button;
import com.google.gwt.user.client.ui.RootPanel;
import com.google.gwt.user.client.ui.DecoratedTabPanel;
import com.google.gwt.user.client.ui.AbsolutePanel;
import com.google.gwt.user.client.ui.Label;
import com.google.gwt.user.client.ui.ListBox;
import com.google.gwt.user.client.ui.TextBox;
import com.google.gwt.user.client.ui.TextArea;

/**
 * Entry point classes define <code>onModuleLoad()</code>.
 */
public class messagestack2 implements EntryPoint {
  DecoratedTabPanel decoratedTabPanel = new DecoratedTabPanel();
	
	public void onModuleLoad() {
		RootPanel rootPanel = RootPanel.get();
		
		rootPanel.add(decoratedTabPanel, 6, 37);
		decoratedTabPanel.setSize("329px", "341px");
		
		AbsolutePanel absolutePanel = new AbsolutePanel();
		decoratedTabPanel.add(absolutePanel, "Inbox", false);
		absolutePanel.setSize("315px", "300px");
		
		ListBox listBox = new ListBox();
		listBox.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				// Inbox Message Clicked
			}
		});
		absolutePanel.add(listBox, 0, 0);
		listBox.setSize("315px", "300px");
		listBox.setVisibleItemCount(5);
		
		AbsolutePanel absolutePanel_1 = new AbsolutePanel();
		decoratedTabPanel.add(absolutePanel_1, "New Message", false);
		absolutePanel_1.setSize("317px", "297px");
		
		TextBox textBox = new TextBox();
		absolutePanel_1.add(textBox, 74, 24);
		textBox.setSize("219px", "33px");
		
		TextBox textBox_1 = new TextBox();
		absolutePanel_1.add(textBox_1, 74, 76);
		textBox_1.setSize("219px", "33px");
		
		Label label_1 = new Label("To:");
		absolutePanel_1.add(label_1, 45, 24);
		label_1.setSize("23px", "33px");
		
		Label label_2 = new Label("Subject:");
		absolutePanel_1.add(label_2, 11, 78);
		
		TextArea textArea = new TextArea();
		absolutePanel_1.add(textArea, 20, 128);
		textArea.setSize("272px", "107px");
		
		Button button_4 = new Button("Send Message");
		absolutePanel_1.add(button_4, 84, 257);
		button_4.setSize("151px", "34px");
		
		AbsolutePanel absolutePanel_2 = new AbsolutePanel();
		decoratedTabPanel.add(absolutePanel_2, "Edit Inbox", false);
		absolutePanel_2.setSize("316px", "298px");
		
		ListBox listBox_1 = new ListBox();
		absolutePanel_2.add(listBox_1, 0, 0);
		listBox_1.setSize("310px", "241px");
		listBox_1.setVisibleItemCount(5);
		
		Button button_3 = new Button("Delete Selected MSG");
		absolutePanel_2.add(button_3, 67, 258);
		button_3.setSize("179px", "34px");
		
		Label label = new Label("Message Stack");
		label.setStyleName("body");
		rootPanel.add(label, 109, 6);
		
		Button button = new Button("New MSG");
		button.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				decoratedTabPanel.selectTab(1);
			}
		});
		rootPanel.add(button, 6, 398);
		button.setSize("105px", "34px");
		
		Button button_1 = new Button("Edit List");
		button_1.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				decoratedTabPanel.selectTab(2);
			}
		});
		rootPanel.add(button_1, 117, 398);
		button_1.setSize("105px", "34px");
		
		Button button_2 = new Button("Close");
		button_2.addClickHandler(new ClickHandler() {
			public void onClick(ClickEvent event) {
				// Exit Program
			}
		});
		rootPanel.add(button_2, 228, 398);
		button_2.setSize("102px", "34px");
		
		// Open default tab
		decoratedTabPanel.selectTab(0);
	}
}
